<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('blog') }}">Blog</a>
    <a href="{{ route('contact') }}">Contact</a>



    <h3>My Name is {{$nama}} </h3>
    <h1>About me</h1>
    <img src="img/epek.jpg" alt="" srcset="" width="200">

</body>

</html>