<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title inertia>Car & Classic</title>
    @vite('resources/js/app.ts')
    @inertiaHead
</head>
<body class="font-sans antialiased bg-zinc-100 text-zinc-900 dark:bg-zinc-900 dark:text-zinc-100">
    @inertia
</body>
</html>
