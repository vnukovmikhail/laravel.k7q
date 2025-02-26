<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <x-header/>

    <main class="h-screen grid place-items-center text-7xl font-black">
        {{ $slot }}
    </main>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>

    <x-footer/>
</body>
</html>