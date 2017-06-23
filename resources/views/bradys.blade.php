<!doctype html>
<html lang="en">
    <head>
        <title>All Bradys</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/app.css">
    </head>
<body>
<div class="container">
<div class="row">
    <h2>All Bradys</h2>
    @foreach ($bradys as $brady)
        <div class="col-xs-4" style="border: 2px solid blue;">{{ $brady->name }}</div>
    @endforeach
</div>
</div>
</body>
</html>