@extends('layouts.app')

@section('content')
<div class=" p-4 flex items-center justify-center">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h1 class="text-3xl font-bold text-green-800 text-center">Welcome Back</h1>
            <p class="text-gray-600 text-center mt-2">Sign in to continue your sustainable journey</p>
        </div>
        <div class="p-6 rounded-lg shadow-md">
            <form class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" placeholder="you@example.com" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-sm text-gray-400" required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" placeholder="Enter your password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-sm text-gray-400" required>
                </div>
                <div>
                    <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        → Sign In
                    </button>
                </div>
            </form>
            <div class="text-center mt-4">
                <a href="{{ route('register') }}" class="text-green-600 hover:text-green-700 text-sm">Don't have an account? Join Now</a>
            </div>
        </div>
    </div>
</div>
@endsection