@extends('layouts.app')
@section('content')
    <form class="w-1/4 bg-slate-50 flex flex-col shadow-md rounded-md p-4" method="POST" action="{{ route('auth.login') }}">
        <h1 class="text-2xl font-bold mb-2 text-center">Login</h1>
        <div class="flex flex-col space-y-2 mb-2">
            <label for="email">Email</label>
            <input class="bg-slate-50 border-2 border-gray-500 rounded-sm text-md px-2 py-2" type="text" id="email" name="email" autofocus>
            @error('email')
                <p class="text-red-400 text-sm font-semibold">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2 mb-4">
            <label for="password">Password</label>
            <input class="bg-slate-50 border-2 border-gray-500 rounded-sm text-md px-2 py-2" type="password" id="password" name="password">
            @error('password')
                <p class="text-red-400 text-sm font-semibold">{{ $message }}</p>
            @enderror
        </div>
        @if (session('error'))
            <p class="text-red-400 text-sm font-semibold text-center mb-4">{{ session('error') }}</p>
        @endif
        <button type="submit" class="bg-violet-600 py-2 text-slate-50 uppercase tracking-wider">
            Login
        </button>
        @csrf
    </form>
@endsection