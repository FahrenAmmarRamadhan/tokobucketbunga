<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Products - Poliban</title>
    @vite('resources/css/app.css')
    <style>
        .transparent {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            transition: background-color 0.3s ease, backdrop-filter 0.3s ease;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Header Start -->
    <header id="navbar" class="fixed top-0 z-10 w-full bg-witehadow-md transparent">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <div class="flex items-center">
                <img src="./img/logo.png" alt="Logo" class="w-16">
                <div class="ml-4">
                    <form action="{{ route('products.index') }}" method="GET">
                        <input type="text" name="search" placeholder="Search for products"
                            class="px-4 py-2 border rounded-md">
                        <button type="submit"
                            class="px-4 py-2 text-white bg-pink-500 rounded-md hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500">Search</button>
                    </form>
                </div>
            </div>
            <nav class="hidden space-x-10 lg:flex">
                <a href="/" class="text-gray-700 hover:text-pink-500">Home</a>
                <a href="/about" class="text-gray-700 hover:text-pink-500">About</a>
                <a href="/products" class="text-gray-700 hover:text-pink-500">Product</a>
                <a href="/contact" class="text-gray-700 hover:text-pink-500">Contact</a>
            </nav>
            <button id="hamburger" name="hamburger" type="button" class="block lg:hidden">
                <span class="transition duration-300 ease-in-out origin-top-left hamburger-line"></span>
                <span class="transition duration-300 ease-in-out hamburger-line"></span>
                <span class="transition duration-300 ease-in-out origin-bottom-left hamburger-line"></span>
            </button>
        </div>
        <nav id="nav-menu" class="hidden lg:hidden">
            <ul class="py-4 bg-white rounded-lg shadow-lg">
                <li><a href="/" class="block px-4 py-2 text-gray-700 hover:text-pink-600">Home</a></li>
                <li><a href="/about" class="block px-4 py-2 text-gray-700 hover:text-pink-600">About</a></li>
                <li><a href="/costumer" class="block px-4 py-2 text-gray-700 hover:text-pink-600">Product</a></li>
                <li><a href="/contact" class="block px-4 py-2 text-gray-700 hover:text-pink-600">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- Header End -->

    <div class="container mx-auto mt-20">
        <div class="text-center">
            <h5>Data Products</h5>
            <hr class="my-4">
        </div>
        <div class="p-6 bg-white rounded-lg shadow-md">
            <div class="flex justify-end mb-4">
                <a href="{{ route('products.create') }}" class="px-4 py-2 text-white bg-green-500 rounded-md">ADD
                    PRODUCT</a>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="w-1/4 py-2 text-left">IMAGE</th>
                            <th class="w-1/4 py-2 text-left">TITLE</th>
                            <th class="w-1/4 py-2 text-left">PRICE</th>
                            <th class="w-1/4 py-2 text-left">STOCK</th>
                            <th class="w-1/4 py-2 text-left">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td class="px-4 py-2 border-t">
                                    <img src="{{ asset('/storage/products/' . $product->image) }}" class="rounded w-36">
                                </td>
                                <td class="px-4 py-2 border-t">{{ $product->title }}</td>
                                <td class="px-4 py-2 border-t">{{ "Rp " . number_format($product->price, 2, ',', '.') }}
                                </td>
                                <td class="px-4 py-2 border-t">{{ $product->stock }}</td>
                                <td class="px-4 py-2 border-t">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('products.show', $product->id) }}"
                                            class="px-2 py-1 text-white bg-gray-700 rounded">SHOW</a>
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="px-2 py-1 text-white bg-blue-500 rounded">EDIT</a>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-2 py-1 text-white bg-red-500 rounded">HAPUS</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-4 text-center">Data Products belum Tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>

    <script>
        const hamburger = document.querySelector("#hamburger");
        const navMenu = document.querySelector("#nav-menu");

        hamburger.addEventListener("click", () => {
            navMenu.classList.toggle("hidden");
        });
    </script>
</body>

</html>