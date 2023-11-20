<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-4acf6279.css') }}">
    <script type="module" src="{{ asset('build/assets/app-f97be9a7.js') }}"></script> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Lastation</title>

</head>

<body class="container mx-auto">
    <section class="grid grid-cols-2 p-5">
        <div class="col-span-2">
            <h3 class="text-[36px] font-bold text-center mb-5">{{ $articles->title }}</h3>
        </div>
        <div class="col-span-2">
            <p>
                {{ $articles->content }}
            </p>
        </div>
    </section>
</body>

</html>
