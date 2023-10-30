<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('build/assets/app-1a7f99d6.css') }}">
    <script type="module" src="{{ asset('build/assets/app-02317797.js') }}"></script>
    <title>Lastation</title>

</head>

<body class="container mx-auto">
    <div class=" p-3  absolute top-0 left-0 bg-gradient w-screen h-screen" >

    </div>
    <nav class=" flex justify-between p-3 text-black flex-wrap">
        <ul class="flex items-center gap-5">
            <li>
                <img src="{{ asset('build/assets/Icon-dark-d42a0cf6.png') }}" width="40px" height="40px" alt="">
            </li>
            <li>
                <h1 class="text-[27px] font-bold">Lastation.</h1>
            </li>
        </ul>
        <ul class="flex items-center gap-5 justify-center mx-auto">
            <li>
                <a href="/" class="text-base hover:text-white {{ Request::is('/') ? 'font-bold text-white' : '' }}">Home</a>
            </li>
            <li>
                <a href="/features" class="text-base hover:text-white {{ Request::is('features') ? 'font-bold text-white' : '' }}">Features</a>
            </li>
            <li>
                <a href="/products" class="text-base hover:text-white {{ Request::is('products') ? 'font-bold text-white' : '' }}">Products</a>
            </li>
            <li>
                <a href="/contactus" class="text-base hover:text-white {{ Request::is('contactus') ? 'font-bold text-white' : '' }}">Contact Us</a>
            </li>
        </ul>
        <ul class="flex items-center gap-5">
            <li>
                <button class="rounded px-3 py-1 outline outline-1 outline-green-200 hover:shadow-lg text-green-600">Order Now</button>
            </li>
        </ul>
    </nav>

    @yield('content')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
</body>

</html>
