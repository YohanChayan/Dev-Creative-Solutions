<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dev creative Solutions</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://kit.fontawesome.com/eaecb88f2d.css" crossorigin="anonymous">

</head>

<body class="bg-secondary">

    @include('layouts.navbar')

    <div class="container-fluid bg-secondary min-vh-100 vh-auto">
        @yield('content')
    </div>


    
    <script src="https://kit.fontawesome.com/eaecb88f2d.js" crossorigin="anonymous"></script>
</body>

</html>
