<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Bunga</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <!-- navbar -->
    <x-navbar></x-navbar>
    <!-- navbar -->
    <main>
        {{ $slot }}
    </main>

    <!-- footer -->
    <x-footer></x-footer>
    <!-- footer -->
    @vite('resources/js/app.js')
</body>

</html>