<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ninio Portfolio')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-950 text-white relative scroll-smooth overflow-x-hidden">

    {{-- <!-- BACKGROUND BLUR BLOBS --> --}}
    <div class="absolute top-0 left-0 w-100 h-125 bg-blue-600 opacity-20 blur-[120px] -z-10"></div>
    <div class="absolute bottom-0 right-0 w-100 h-125 bg-purple-600 opacity-20 blur-[120px] -z-10"></div>

    {{-- <!-- SITE CONTENT --> --}}
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>
