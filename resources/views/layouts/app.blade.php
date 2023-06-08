<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-200 flex items-center justify-center">
    @auth
        <div class="fixed top-0 w-full px-4 py-4 bg-slate-50 flex justify-between items-center">
            <h1 class="text-lg font-semibold uppercase">Basic Invoice System</h1>
            <div class="flex items-center justify-center space-x-4">
                <p>Hello, {{ auth()->user()->name }}!</p>
                <a class="text-red-500 hover:text-red-700" href="{{ route('auth.logout')}}">Logout</a>
            </div>
        </div>
    @endauth
    {{ $slot }}
</body>
</html>