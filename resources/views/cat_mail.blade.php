<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
<body>
    <h1>All the cats:</h1>
        @foreach ($cats as $cat)
            <p>{{ $cat->name }}</p>
        @endforeach
</body>
</html>

