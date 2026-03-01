<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
     <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    @include('partials.header')
    <main class="main-content">
    @yield('content')
    </main>
</body>

</html>
