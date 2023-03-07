<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dev creative Solutions</title>

    @include('layouts.links')

</head>

<body class="bg-secondary">

    @include('layouts.navbar')

    <div class="container-fluid bg-secondary min-vh-100 vh-auto">
        @yield('content')
    </div>



    @include('layouts.scripts')
</body>

</html>
