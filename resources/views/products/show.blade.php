<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
</head>

<body>
    <div>
        <h1>{{$products->title}}</h1>
        <img src="{{ asset('/storage/products/' . $products->image) }}" alt="">
        <p>{{ "Rp " . number_format($products->price, 2, ',', '.') }}</p>
        <p>{{ $products->stock }}</p>
    </div>
</body>

</html>