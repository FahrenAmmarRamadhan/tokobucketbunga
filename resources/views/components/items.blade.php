<section id="product" class="scroll-pt-32">
    <h1 class="pb-10 text-2xl font-bold text-center text-pink">PRODUCTS</h1>
    <div class="container px-6 mx-auto sm:flex sm:flex-wrap sm:gap-6 sm:justify-evenly">
        @if($products->isEmpty())
            <p>No products available.</p>
        @else
            @foreach($products as $product)
                <div class="mb-10 overflow-hidden rounded-md shadow-lg sm:w-64 md:w-80 lg:w-72 sm:m-0">
                    <img src="{{ asset('storage/products/' . $product->image) }}" alt="Product image" class="w-full">
                    <div class="px-6 py-4">
                        <h2>{{ $product['title'] }}</h2>
                        <p class="text-sm text-slate-600">{{ $product['description'] }}</p>
                        <p class="pt-4 pb-2 transition-all duration-700 cursor-pointer hover:overflow-hidden hover:scale-105">
                            Rp.{{ number_format($product->price, 3) }}
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="flex items-center justify-center mt-10">
        <a href="/costumer" class="px-4 py-2 text-center text-white bg-blue-500 rounded-lg">More Product</a>
    </div>
</section>