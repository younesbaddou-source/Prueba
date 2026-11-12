<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title >
        @yield('title', 'Mini TaskFlow')
    </title>
    
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="body">
    @include('partials.icons')
    @yield('content')
</body>
</html>
