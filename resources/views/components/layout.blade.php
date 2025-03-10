<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ config('app.name') }}</title>
</head>
<body class="flex flex-col h-screen">
    <x-header/>
    <main class="flex-grow">{{ $slot }}</main>
    <x-footer />
</body>
</html>