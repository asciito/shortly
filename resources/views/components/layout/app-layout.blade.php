<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name') }} | {{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('head')
</head>
<body class="relative">
    <header class="bg-white shadow-md p-4 mb-6">
        <nav class="w-full max-w-6xl mx-auto">
            <ul class="w-full flex justify-center space-x-2">
                <li>
                    <a href="{{ route('index') }}" class="inline-block hover:text-blue-400">Home</a>
                </li>

                <li>
                    <a href="{{ route('create') }}" class="inline-block hover:text-blue-400">Create New</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="w-full max-w-6xl mx-auto p-4">{{ $slot }}</main>

    <x-banner />

    <script src="//unpkg.com/alpinejs" defer></script>
    @stack('footer')
</body>
</html>