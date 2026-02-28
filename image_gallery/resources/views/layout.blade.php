<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload Image</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    <header class="header">
        <div class="logo">My Website</div>
        <div>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('gallary') }}">Gallery</a>
        </div>
    </header>

    @yield('content')

</body>

</html>
