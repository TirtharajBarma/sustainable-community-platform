@extends('layouts.app')
@section('content')
<div class="min-h-screen py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Community Projects</h1>
                <p class="mt-1 text-lg text-gray-600">Join or create sustainability projects to make a real impact in your area.</p>
            </div>
            <div>
                @auth
                    <button class="mt-4 sm:mt-0 bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md text-sm sm:text-base" id="uploadResourceBtn">
                        Start new Project
                    </button>
                @else
                    <a href="{{ route('login') }}" class="mt-4 sm:mt-0 bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md text-sm sm:text-base">
                        Log In to Upload Project
                    </a>
                @endauth
            </div>
        </div>

        <!-- Search and Filter Section -->
        <div class="mb-8">
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                <div class="relative flex-grow">
                    <input type="text" id="searchInput" placeholder="Search projects..." class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                </div>
            </div>
            
            <!-- Categories -->
            <div class="mt-4 flex flex-wrap gap-2">
                <button class="category-filter px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700" data-category="all">All Categories</button>
                <button class="category-filter px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50" data-category="urban greening">Urban Greening</button>
                <button class="category-filter px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50" data-category="water conservation">Water Conservation</button>
                <button class="category-filter px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50" data-category="waste reduction">Waste Reduction</button>
                <button class="category-filter px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50" data-category="biodiversity">Biodiversity</button>
                <button class="category-filter px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50" data-category="renewable energy">Renewable Energy</button>
                <button class="category-filter px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50" data-category="food systems">Food Systems</button>
            </div>
        </div>

        <!-- Main Content: Projects Grid or Add Details Page -->
        <div id="mainContent">
            <!-- Projects Grid -->
            <div id="projectsGrid" class="project-cards grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Project Card 1 - Community Garden -->
                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow" data-category="urban greening">
                    <div class="relative h-48 bg-gray-100">
                        <!-- Project Image -->
                        <img src="{{ asset('images/urban-greening.jpg') }}" alt="Community Garden Revitalization" class="w-full h-full object-cover">
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-white/80 text-green-800">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.8 3a1 1 0 00-.8.4 1 1 0 00-.3 1L8.6 19l.1.1h2.4l.1-.1L16 4.3V4a1 1 0 00-.3-.7 1 1 0 00-.8-.4H4.8z" clip-rule="evenodd"></path>
                                </svg>
                                Urban Greening
                            </span>
                        </div>
                    </div>

                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-900">Community Garden Revitalization</h3>
                        
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Portland, OR
                        </div>
                        
                        <div class="mt-1 flex items-center text-sm text-gray-500">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            5/15/2025 - 8/30/2025
                        </div>
                        
                        <p class="mt-3 text-sm text-gray-600">
                            Transforming an abandoned lot into a thriving community garden with native plants, vegetables...
                        </p>
                        
                        <!-- Progress Bar -->
                        <div class="mt-4">
                            <div class="flex justify-between text-sm">
                                <span>Progress</span>
                                <span class="font-medium">65%</span>
                            </div>
                            <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                        
                        <div class="mt-3 flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                12/18 tasks done
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                </svg>
                                24 participants
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-200 bg-gray-50 px-4 py-3 sm:px-6 flex justify-between items-center">
                        <div class="flex items-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </div>
                        <div class="flex space-x-2">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                                Join Project
                            </a>
                            <button class="delete-btn bg-red-600 hover:bg-red-700 text-white font-medium py-1 px-3 rounded text-xs" data-title="Community Garden Revitalization">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Project Card 2 - Neighborhood Stream Cleanup -->
                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow" data-category="water conservation">
                    <div class="relative h-48 bg-gray-100">
                        <!-- Project Image -->
                        <img src="{{ asset('images/water-conservation.jpg') }}" alt="Neighborhood Stream Cleanup" class="w-full h-full object-cover">
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-white/80 text-blue-800">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                Water Conservation
                            </span>
                        </div>
                    </div>

                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-900">Neighborhood Stream Cleanup</h3>
                        
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Austin, TX
                        </div>
                        
                        <div class="mt-1 flex items-center text-sm text-gray-500">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            4/22/2025 - 4/22/2025
                        </div>
                        
                        <p class="mt-3 text-sm text-gray-600">
                            Organizing a one-day cleanup effort to remove trash and invasive species from Cedar Creek, followed by a community picnic...
                        </p>
                        
                        <!-- Progress Bar -->
                        <div class="mt-4">
                            <div class="flex justify-between text-sm">
                                <span>Progress</span>
                                <span class="font-medium">30%</span>
                            </div>
                            <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 30%"></div>
                            </div>
                        </div>
                        
                        <div class="mt-3 flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                4/12 tasks done
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                </svg>
                                38 participants
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-200 bg-gray-50 px-4 py-3 sm:px-6 flex justify-between items-center">
                        <div class="flex items-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </div>
                        <div class="flex space-x-2">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                                Join Project
                            </a>
                            <button class="delete-btn bg-red-600 hover:bg-red-700 text-white font-medium py-1 px-3 rounded text-xs" data-title="Neighborhood Stream Cleanup">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Project Card 3 - Zero Waste School Initiative -->
                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow" data-category="waste reduction">
                    <div class="relative h-48 bg-gray-100">
                        <!-- Project Image -->
                        <img src="{{ asset('images/waste-reduction.jpg') }}" alt="Zero Waste School Initiative" class="w-full h-full object-cover">
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-white/80 text-green-800">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path>
                                </svg>
                                Waste Reduction
                            </span>
                        </div>
                    </div>

                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-900">Zero Waste School Initiative</h3>
                        
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Minneapolis, MN
                        </div>
                        
                        <div class="mt-1 flex items-center text-sm text-gray-500">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            3/1/2025 - 12/15/2025
                        </div>
                        
                        <p class="mt-3 text-sm text-gray-600">
                            Working with local schools to implement waste reduction strategies including composting, recycling, and education programs...
                        </p>
                        
                        <!-- Progress Bar -->
                        <div class="mt-4">
                            <div class="flex justify-between text-sm">
                                <span>Progress</span>
                                <span class="font-medium">45%</span>
                            </div>
                            <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 45%"></div>
                            </div>
                        </div>
                        
                        <div class="mt-3 flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                11/24 tasks done
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                </svg>
                                15 participants
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-200 bg-gray-50 px-4 py-3 sm:px-6 flex justify-between items-center">
                        <div class="flex items-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </div>
                        <div class="flex space-x-2">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                                Join Project
                            </a>
                            <button class="delete-btn bg-red-600 hover:bg-red-700 text-white font-medium py-1 px-3 rounded text-xs" data-title="Zero Waste School Initiative">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project Card 4 - Community Solar Purchasing Group -->
                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow" data-category="renewable energy">
                    <div class="relative h-48 bg-gray-100">
                        <!-- Project Image -->
                        <img src="{{ asset('images/renewable-energy.jpg') }}" alt="Community Solar Purchasing Group" class="w-full h-full object-cover">
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-white/80 text-yellow-800">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                                </svg>
                                Renewable Energy
                            </span>
                        </div>
                    </div>

                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-900">Community Solar Purchasing Group</h3>
                        
                        <div class="mt-2 flex items-center text-sm text-gray-500">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Burlington, VT
                        </div>
                        
                        <div class="mt-1 flex items-center text-sm text-gray-500">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            2/15/2025 - 7/30/2025
                        </div>
                        
                        <p class="mt-3 text-sm text-gray-600">
                            Organizing a bulk purchase of residential solar panel systems to reduce costs through group buying power...
                        </p>
                        
                        <!-- Progress Bar -->
                        <div class="mt-4">
                            <div class="flex justify-between text-sm">
                                <span>Progress</span>
                                <span class="font-medium">20%</span>
                            </div>
                            <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 20%"></div>
                            </div>
                        </div>
                        
                        <div class="mt-3 flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                3/15 tasks done
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                </svg>
                                12 participants
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-200 bg-gray-50 px-4 py-3 sm:px-6 flex justify-between items-center">
                        <div class="flex items-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </div>
                        <div class="flex space-x-2">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                                Join Project
                            </a>
                            <button class="delete-btn bg-red-600 hover:bg-red-700 text-white font-medium py-1 px-3 rounded text-xs" data-title="Community Solar Purchasing Group">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Details Page (hidden by default) -->
            <div id="addDetailsPage" class="hidden bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto mt-8">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Add Project Details</h2>
                <div class="space-y-4">
                    <div>
                        <label for="projectTitle" class="block text-sm font-medium text-gray-700">Project Title</label>
                        <input type="text" id="projectTitle" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., Community Garden Revitalization">
                    </div>
                    <div>
                        <label for="projectImage" class="block text-sm font-medium text-gray-700">Project Image URL</label>
                        <input type="text" id="projectImage" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., {{ asset('images/urban-greening.jpg') }}">
                    </div>
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="category" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="urban greening">Urban Greening</option>
                            <option value="water conservation">Water Conservation</option>
                            <option value="waste reduction">Waste Reduction</option>
                            <option value="biodiversity">Biodiversity</option>
                            <option value="renewable energy">Renewable Energy</option>
                            <option value="food systems">Food Systems</option>
                        </select>
                    </div>
                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                        <input type="text" id="location" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., Portland, OR">
                    </div>
                    <div>
                        <label for="dateRange" class="block text-sm font-medium text-gray-700">Date Range</label>
                        <input type="text" id="dateRange" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., 5/15/2025 - 8/30/2025">
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., Transforming an abandoned lot into a thriving community garden..." rows="3"></textarea>
                    </div>
                    <div>
                        <label for="progress" class="block text-sm font-medium text-gray-700">Progress (e.g., 65%)</label>
                        <input type="text" id="progress" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., 65%">
                    </div>
                    <div>
                        <label for="tasks" class="block text-sm font-medium text-gray-700">Tasks (e.g., 12/18 tasks done)</label>
                        <input type="text" id="tasks" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., 12/18 tasks done">
                    </div>
                    <div>
                        <label for="participants" class="block text-sm font-medium text-gray-700">Participants (e.g., 24 participants)</label>
                        <input type="text" id="participants" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., 24 participants">
                    </div>
                    <div class="flex justify-end space-x-3">
                        <button id="cancelBtn" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-1 px-3 rounded text-sm">Cancel</button>
                        <button id="saveProjectBtn" class="bg-green-600 hover:bg-green-700 text-white font-medium py-1 px-3 rounded text-sm">Save Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Navigation, Local Storage, and Project Rendering -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const createProjectBtn = document.getElementById('uploadResourceBtn');
    const projectsGrid = document.getElementById('projectsGrid');
    const addDetailsPage = document.getElementById('addDetailsPage');
    const saveProjectBtn = document.getElementById('saveProjectBtn');
    const cancelBtn = document.getElementById('cancelBtn');
    const searchInput = document.getElementById('searchInput');
    const categoryFilters = document.querySelectorAll('.category-filter');

    let selectedCategory = 'all';

    // Show Add Details page when Create Project is clicked
    if (createProjectBtn) {
        createProjectBtn.addEventListener('click', function () {
            projectsGrid.classList.add('hidden');
            addDetailsPage.classList.remove('hidden');
        });
    } else {
        console.error('createProjectBtn not found');
    }

    // Cancel button to return to projects grid
    cancelBtn.addEventListener('click', function () {
        addDetailsPage.classList.add('hidden');
        projectsGrid.classList.remove('hidden');
        clearForm();
    });

    // Save project and render it
    saveProjectBtn.addEventListener('click', function () {
        const project = {
            title: document.getElementById('projectTitle').value,
            image: document.getElementById('projectImage').value,
            category: document.getElementById('category').value.toLowerCase(),
            location: document.getElementById('location').value,
            dateRange: document.getElementById('dateRange').value,
            description: document.getElementById('description').value,
            progress: document.getElementById('progress').value,
            tasks: document.getElementById('tasks').value,
            participants: document.getElementById('participants').value
        };

        // Validate required fields
        if (!project.title || !project.image || !project.category || !project.location || !project.dateRange || !project.description || !project.progress || !project.tasks || !project.participants) {
            alert('Please fill in all fields.');
            return;
        }

        // Save to localStorage
        const storedProjects = JSON.parse(localStorage.getItem('projects')) || [];
        storedProjects.push(project);
        localStorage.setItem('projects', JSON.stringify(storedProjects));

        // Render the new project
        renderProject(project);

        // Switch back to projects grid
        addDetailsPage.classList.add('hidden');
        projectsGrid.classList.remove('hidden');
        clearForm();

        // Apply filters
        filterProjects();
    });

    // Load and normalize projects from localStorage on page load
    let storedProjects = JSON.parse(localStorage.getItem('projects')) || [];
    storedProjects = storedProjects.filter(project => project && project.title && project.category);
    storedProjects = storedProjects.map(project => ({
        title: project.title || 'Untitled Project',
        image: project.image || '{{ asset('images/placeholder.jpg') }}',
        category: project.category?.toLowerCase() || 'urban greening',
        location: project.location || 'Unknown Location',
        dateRange: project.dateRange || 'Unknown Dates',
        description: project.description || 'No description provided',
        progress: project.progress || '0%',
        tasks: project.tasks || '0/0 tasks done',
        participants: project.participants || '0 participants'
    }));
    storedProjects.forEach(project => renderProject(project));
    localStorage.setItem('projects', JSON.stringify(storedProjects));

    // Function to render a new project card
    function renderProject(project) {
        if (!project || !project.category) {
            console.warn('Invalid project object, skipping render:', project);
            return;
        }

        const categoryColor = {
            'urban greening': 'text-green-800',
            'water conservation': 'text-blue-800',
            'waste reduction': 'text-green-800',
            'biodiversity': 'text-green-800',
            'renewable energy': 'text-yellow-800',
            'food systems': 'text-green-800'
        }[project.category.toLowerCase()] || 'text-green-800';

        const projectCard = document.createElement('div');
        projectCard.className = 'bg-white rounded-lg border border-gray-200 overflow-hidden shadow';
        projectCard.setAttribute('data-category', project.category.toLowerCase());
        projectCard.innerHTML = `
            <div class="relative h-48 bg-gray-100">
                <img src="${project.image || '{{ asset('images/placeholder.jpg') }}'}" alt="${project.title}" class="w-full h-full object-cover">
                <div class="absolute top-4 left-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-white/80 ${categoryColor}">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path>
                        </svg>
                        ${project.category.charAt(0).toUpperCase() + project.category.slice(1)}
                    </span>
                </div>
            </div>
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-900">${project.title}</h3>
                <div class="mt-2 flex items-center text-sm text-gray-500">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                    </svg>
                    ${project.location}
                </div>
                <div class="mt-1 flex items-center text-sm text-gray-500">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                    </svg>
                    ${project.dateRange}
                </div>
                <p class="mt-3 text-sm text-gray-600">
                    ${project.description}
                </p>
                <div class="mt-4">
                    <div class="flex justify-between text-sm">
                        <span>Progress</span>
                        <span class="font-medium">${project.progress}</span>
                    </div>
                    <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: ${project.progress}"></div>
                    </div>
                </div>
                <div class="mt-3 flex items-center justify-between">
                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        ${project.tasks}
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                    </svg>
                    ${project.participants}
                </div>
            </div>
            <div class="border-t border-gray-200 bg-gray-50 px-4 py-3 sm:px-6 flex justify-between items-center">
                <div class="flex items-center">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Active
                    </span>
                </div>
                <div class="flex space-x-2">
                    <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                        Join Project
                    </a>
                    <button class="delete-btn bg-red-600 hover:bg-red-700 text-white font-medium py-1 px-3 rounded text-xs" data-title="${project.title}">
                        Delete
                    </button>
                </div>
            </div>
        `;
        projectsGrid.appendChild(projectCard);
    }

    // Function to delete a project
    function deleteProject(title) {
        let storedProjects = JSON.parse(localStorage.getItem('projects')) || [];
        storedProjects = storedProjects.filter(project => project.title !== title);
        localStorage.setItem('projects', JSON.stringify(storedProjects));
        const cardToRemove = Array.from(document.querySelectorAll('.project-cards > div')).find(card => card.querySelector('h3')?.textContent === title);
        if (cardToRemove) cardToRemove.remove();
        filterProjects();
    }

    // Add event listener for delete buttons
    projectsGrid.addEventListener('click', function (e) {
        if (e.target.classList.contains('delete-btn')) {
            const title = e.target.getAttribute('data-title');
            if (confirm(`Are you sure you want to delete "${title}"?`)) {
                deleteProject(title);
            }
        }
    });

    // Function to clear the form
    function clearForm() {
        document.getElementById('projectTitle').value = '';
        document.getElementById('projectImage').value = '';
        document.getElementById('category').value = 'urban greening';
        document.getElementById('location').value = '';
        document.getElementById('dateRange').value = '';
        document.getElementById('description').value = '';
        document.getElementById('progress').value = '';
        document.getElementById('tasks').value = '';
        document.getElementById('participants').value = '';
    }

    // Function to filter projects
    function filterProjects() {
        try {
            const searchTerm = searchInput.value.toLowerCase().trim();
            const projectCards = document.querySelectorAll('.project-cards > div');
            projectCards.forEach(card => {
                const titleElement = card.querySelector('h3');
                const descriptionElement = card.querySelector('p.text-gray-600');
                const title = titleElement ? titleElement.textContent.toLowerCase() : '';
                const description = descriptionElement ? descriptionElement.textContent.toLowerCase() : '';
                const category = card.getAttribute('data-category')?.toLowerCase() || '';
                const matchesSearch = !searchTerm || title.includes(searchTerm) || description.includes(searchTerm);
                const matchesCategory = selectedCategory === 'all' || category === selectedCategory;
                card.style.display = matchesSearch && matchesCategory ? 'grid' : 'none';
            });
        } catch (error) {
            console.error('Error in filterProjects:', error);
        }
    }

    // Event listeners for filtering
    searchInput.addEventListener('input', filterProjects);

    categoryFilters.forEach(button => {
        button.addEventListener('click', function () {
            categoryFilters.forEach(btn => {
                btn.classList.remove('bg-green-600', 'text-white', 'hover:bg-green-700');
                btn.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-700', 'hover:bg-gray-50');
            });
            this.classList.remove('bg-white', 'border', 'border-gray-300', 'text-gray-700', 'hover:bg-gray-50');
            this.classList.add('bg-green-600', 'text-white', 'hover:bg-green-700');
            selectedCategory = this.getAttribute('data-category').toLowerCase();
            filterProjects();
        });
    });

    // Apply filters on page load
    filterProjects();
});
</script>
@endsection