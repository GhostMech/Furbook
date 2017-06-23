<!doctype html>
<html lang="en">
    <head>
        <title>Furbook</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <meta name="viewport" content="width=device-width, user-scalable=no">
<body>
    <div class="container">
        <div class="page-header">
            @include('partials.header')
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success')}}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>