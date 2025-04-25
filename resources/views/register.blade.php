@extends('layouts.app')

@section('content')
<div class="p-4 flex items-center justify-center">
    <div class="max-w-md w-full space-y-4">
        <div>
            <h1 class="text-2xl font-bold text-green-700 text-center">Join SustainaConnect</h1>
            <p class="text-gray-500 text-center mt-1 text-sm">Create your account and start making a difference</p>
        </div>
        <div class="p-4 rounded-lg shadow-md mt-9">
            <form class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input id="name" type="text" placeholder="Your Name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-sm text-gray-400" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" placeholder="you@example.com" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-sm text-gray-400" required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" placeholder="Choose a strong password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-sm text-gray-400" required>
                </div>
                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input id="confirm-password" type="password" placeholder="Confirm your password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-sm text-gray-400" required>
                </div>
                <div>
                    <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 flex items-center justify-center">
                        <span class="text-xl mr-2">🔒</span> Create Account
                    </button>
                </div>
            </form>
            <div class="text-center mt-2">
                <a href="{{ route('login') }}" class="text-green-600 hover:text-green-700 text-sm">Already have an account? Sign In</a>
            </div>
        </div>
    </div>
</div>
@endsection