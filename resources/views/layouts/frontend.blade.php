<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marshall Photography</title>
    <link rel="icon" href="{{ asset('images/LOGO-MP-removebg.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- font  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">

</head>

<body>
    @include('components.navbar')
    @yield('content')
    @include('components.footer')

</body>

</html>
