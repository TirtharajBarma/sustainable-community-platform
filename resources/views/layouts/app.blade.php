<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sustainable Living Community</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#F5FAF7]">
<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <svg class="h-6 w-6 text-green-700" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                    </svg>
                    <span class="ml-2 text-xl font-semibold text-[#4D7C0F]">SustainaConnect</span>
                </a>
            </div>
            
            <!-- Navigation Links - Center -->
            <!-- Navigation Links - Center -->
            <div class="hidden md:flex justify-center flex-1 space-x-6">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-green-700' : 'text-gray-500' }} hover:text-green-700 text-sm font-medium">Home</a>
                <a href="{{ route('forum') }}" class="{{ request()->routeIs('forum') ? 'text-green-700' : 'text-gray-500' }} hover:text-green-700 text-sm font-medium">Forums</a>
                <a href="{{ route('resources') }}" class="{{ request()->routeIs('resources') ? 'text-green-700' : 'text-gray-500' }} hover:text-green-700 text-sm font-medium">Resources</a>
                <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'text-green-700' : 'text-gray-500' }} hover:text-green-700 text-sm font-medium">Projects</a>
                <a href="{{ route('events') }}" class="{{ request()->routeIs('events') ? 'text-green-700' : 'text-gray-500' }} hover:text-green-700 text-sm font-medium">Events</a>
            </div>
            
            <!-- User Actions - Right -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="{{ route('login') }}" class="flex items-center text-gray-700 hover:text-green-700 px-3 py-2 text-sm font-medium border border-gray-300 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14" />
                    </svg>
                    Sign In
                </a>
                <a href="{{ route('register') }}" class="bg-[#4D7C0F] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Join Now
                    </div>
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-200 py-12 mt-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Column 1: SustainaConnect -->
            <div>
                <div class="flex items-center">
                    <span class="text-green-600 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <h3 class="text-xl font-semibold text-green-700">SustainaConnect</h3>
                </div>
                <p class="mt-4 text-gray-600">Building a sustainable future through community collaboration and knowledge sharing.</p>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-500 hover:text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.01 10.01 0 01-3.127 1.195 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.16a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.342-3.369-1.342-.454-1.155-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.022A9.578 9.578 0 0112 6.836c.85.004 1.705.115 2.504.337 1.909-1.29 2.747-1.022 2.747-1.022.546 1.377.202 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.841-2.337 4.687-4.565 4.934.359.309.678.92.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.16 22 16.416 22 12c0-5.523-4.477-10-10-10z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm-1.25 16.518V7.48c0-.18.147-.328.328-.328h.923c.18 0 .328.147.328.328v9.038c0 .18-.147.328-.328.328h-.923a.328.328 0 01-.328-.328zm-3.5-7.5v7.5c0 .18.147.328.328.328h.922c.18 0 .328-.147.328-.328v-7.5c0-.18-.147-.328-.328-.328h-.922a.328.328 0 00-.328.328zm7 0v7.5c0 .18.147.328.328.328h.922c.18 0 .328-.147.328-.328v-7.5c0-.18-.147-.328-.328-.328h-.922a.328.328 0 00-.328.328z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Column 2: Navigation -->
            <div>
                <h3 class="text-base font-medium text-gray-900">Navigation</h3>
                <ul class="mt-4 space-y-4">
                    <li><a href="#" class="text-base text-gray-600 hover:text-green-700">Home</a></li>
                    <li><a href="#" class="text-base text-gray-600 hover:text-green-700">Forums</a></li>
                    <li><a href="#" class="text-base text-gray-600 hover:text-green-700">Resources</a></li>
                    <li><a href="#" class="text-base text-gray-600 hover:text-green-700">Projects</a></li>
                    <li><a href="#" class="text-base text-gray-600 hover:text-green-700">Events</a></li>
                </ul>
            </div>
            
            <!-- Column 3: Legal -->
            <div>
                <h3 class="text-base font-medium text-gray-900">Legal</h3>
                <ul class="mt-4 space-y-4">
                    <li><a href="#" class="text-base text-gray-600 hover:text-green-700">Privacy Policy</a></li>
                    <li><a href="#" class="text-base text-gray-600 hover:text-green-700">Terms of Service</a></li>
                    <li><a href="#" class="text-base text-gray-600 hover:text-green-700">Code of Conduct</a></li>
                </ul>
            </div>
            
            <!-- Column 4: Newsletter -->
            <div>
                <h3 class="text-base font-medium text-gray-900">Join the Movement</h3>
                <p class="mt-4 text-base text-gray-600">Subscribe to our newsletter for updates and sustainability tips.</p>
                <form class="mt-4 flex space-x-2">
                    <input type="email" placeholder="Email address" class="px-4 py-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-white" />
                    <button type="submit" class="bg-[#4D7C0F] text-white px-4 py-2 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Subscribe</button>
                </form>
            </div>
        </div>
        
        <div class="border-t border-gray-200 pt-8 mt-8 text-center text-gray-600">
            <p>&copy; 2025 Tirtharaj Barma. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html> 