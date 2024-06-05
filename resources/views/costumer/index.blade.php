<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayeges Store</title>
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
    <header id="navbar" class="fixed top-0 z-10 w-full bg-white shadow-md">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <div class="flex items-center store-title-search">
                <img src="./img/logo.png" alt="Logo" class="w-16">
                <div class="ml-4">
                    <input type="text" placeholder="Search for products" class="px-4 py-2 border rounded-md">
                </div>
            </div>
            <nav>
                <ul class="flex space-x-10">
                    <li><a href="/" class="text-gray-700 hover:text-pink-500">Home</a></li>
                    <li><a href="/" class="text-gray-700 hover:text-pink-500">About</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-pink-500">Product</a></li>
                    <li><a href="/" class="text-gray-700 hover:text-pink-500">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Product -->
    <main class="container px-6 py-24 mx-auto mt-24">
        <h1 class="mb-8 text-3xl font-bold text-center">Products</h1>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div class="p-4 bg-white rounded-lg shadow-md product-card">
                <img src="bouquet-pink.jpg" alt="Bouquet Bunga Flanel Pink"
                    class="object-cover w-full h-48 rounded-t-lg">
                <div class="p-4">
                    <p class="font-bold">Bouquet Bunga Flanel Pink</p>
                    <p class="text-gray-600">Idr : 30.000</p>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md product-card">
                <img src="bouquet-blue.jpg" alt="Bouquet Bunga Flanel Blue V2"
                    class="object-cover w-full h-48 rounded-t-lg">
                <div class="p-4">
                    <p class="font-bold">Bouquet Bunga Flanel Blue V2</p>
                    <p class="text-gray-600">Idr : 30.000</p>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md product-card">
                <img src="bouquet-red-yellow.jpg" alt="Bouquet Bunga Flanel Red x Yellow"
                    class="object-cover w-full h-48 rounded-t-lg">
                <div class="p-4">
                    <p class="font-bold">Bouquet Bunga Flanel Red x Yellow</p>
                    <p class="text-gray-600">Idr : 30.000</p>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md product-card">
                <img src="bouquet-purple-blue.jpg" alt="Bouquet Bunga Flanel Purple x Blue"
                    class="object-cover w-full h-48 rounded-t-lg">
                <div class="p-4">
                    <p class="font-bold">Bouquet Bunga Flanel Purple x Blue</p>
                    <p class="text-gray-600">Idr : 30.000</p>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md product-card">
                <img src="bouquet-cream-orange.jpg" alt="Bouquet Bunga Flanel Cream x Orange"
                    class="object-cover w-full h-48 rounded-t-lg">
                <div class="p-4">
                    <p class="font-bold">Bouquet Bunga Flanel Cream x Orange</p>
                    <p class="text-gray-600">Idr : 30.000</p>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md product-card">
                <img src="bouquet-pvc-tulip.jpg" alt="Bouquet PVC Tulip Size S"
                    class="object-cover w-full h-48 rounded-t-lg">
                <div class="p-4">
                    <p class="font-bold">Bouquet PVC Tulip Size S</p>
                    <p class="text-gray-600">Idr : 45.000</p>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md product-card">
                <img src="bouquet-balon-flower.jpg" alt="Bouquet Balon Twist Flower"
                    class="object-cover w-full h-48 rounded-t-lg">
                <div class="p-4">
                    <p class="font-bold">Bouquet Balon Twist Flower</p>
                    <p class="text-gray-600">Idr : 30.000</p>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md product-card">
                <img src="bouquet-balon-teddy.jpg" alt="Bouquet Balon Twist Teddy Bear"
                    class="object-cover w-full h-48 rounded-t-lg">
                <div class="p-4">
                    <p class="font-bold">Bouquet Balon Twist Teddy Bear</p>
                    <p class="text-gray-600">Idr : 40.000</p>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md product-card">
                <img src="bouquet-balon-tulips.jpg" alt="Bouquet Balon Twist Tulips"
                    class="object-cover w-full h-48 rounded-t-lg">
                <div class="p-4">
                    <p class="font-bold">Bouquet Balon Twist Tulips</p>
                    <p class="text-gray-600">Idr : 30.000</p>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md product-card">
                <img src="bouquet-balon-butterfly.jpg" alt="Bouquet Balon Twist Flower x Butterfly V2"
                    class="object-cover w-full h-48 rounded-t-lg">
                <div class="p-4">
                    <p class="font-bold">Bouquet Balon Twist Flower x Butterfly V2</p>
                    <p class="text-gray-600">Idr : 40.000</p>
                </div>
            </div>
        </div>
    </main>
    @vite('resources/js/app.js')
    <script>
        window.addEventListener('scroll', function () {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.classList.add('transparent');
            } else {
                navbar.classList.remove('transparent');
            }
        });
    </script>
</body>

</html>