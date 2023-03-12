<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dev creative Solutions</title>

    @include('layouts.links')

</head>

<body class="bg-my-color">

    @include('layouts.navbar')

    <div class="container-fluid bg-my-color min-vh-100 vh-auto">
        @yield('content')
    </div>

    <div class="row bg-dark">
        <div class="col-lg-3">
            Footer
        </div>
        <div class="col-lg-3">
            Footer
        </div>
        <div class="col-lg-3">
            Footer
        </div>
        <div class="col-lg-3">
            Footer
        </div>
    </div>



    @include('layouts.scripts')
</body>

</html>
