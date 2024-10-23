<!doctype html>
<html lang="pt-BR" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">
<div class="min-h-full">
    <main class="container  mx-auto p-4">
        @yield('content')
    </main>
</div>
</body>
</html>



