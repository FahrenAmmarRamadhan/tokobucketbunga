<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function show($id)
    {
        $products = Product::findOrFail($id);
        return view('products.show', compact('products'));
    }

    public function index(Request $request)
    {
        $search = $request->input('search');

        $products = Product::query()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%");
            })
            ->paginate(10);

        return view('products.index', compact('products'));
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate form
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);

        // Upload image
        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        // Create product
        Product::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        // Redirect to index with success message
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit($id): View
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        // Validate form
        $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        // Find the product
        $product = Product::findOrFail($id);

        // Check if an image is uploaded
        if ($request->hasFile('image')) {
            // Delete old image
            Storage::delete('public/products/' . $product->image);

            // Upload new image
            $image = $request->file('image');
            $image->storeAs('public/products', $image->hashName());

            // Update product with new image
            $product->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock
            ]);
        } else {
            // Update product without new image
            $product->update($request->only(['title', 'description', 'price', 'stock']));
        }

        // Redirect to index with success message
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    }

    public function destroy($id): RedirectResponse
    {
        // Find the product
        $product = Product::findOrFail($id);

        // Delete the product image
        Storage::delete('public/products/' . $product->image);

        // Delete the product
        $product->delete();

        // Redirect to index with success message
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::query()
            ->where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        return response()->json($products);
    }
}