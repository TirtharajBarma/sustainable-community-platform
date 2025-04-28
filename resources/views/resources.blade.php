@extends('layouts.app')

@section('content')
<div class="p-4 sm:p-6">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
            <div>
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">Resource Library</h1>
                <p class="text-gray-600 mt-1 text-sm sm:text-base">Access guides, videos, and articles to help you live more sustainably.</p>
            </div>
            <button class="mt-4 sm:mt-0 bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md text-sm sm:text-base">
                Upload Resource
            </button>
        </div>

        <!-- Search and Filter Bar -->
        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mb-6">
            <div class="relative flex-grow">
                <input type="text" id="searchInput" placeholder="Search resources..." class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-sm sm:text-base">
            </div>
            <div class="relative w-full sm:w-48">
                <select id="typeFilter" class="w-full px-3 py-2 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-2 focus:ring-green-500 text-sm sm:text-base">
                    <option value="all">All Types</option>
                    <option value="guide">Guides</option>
                    <option value="video">Videos</option>
                    <option value="article">Articles</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
            <div class="relative w-full sm:w-48">
                <select id="sortFilter" class="w-full px-3 py-2 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-2 focus:ring-green-500 text-sm sm:text-base">
                    <option value="default">Sort by</option>
                    <option value="popular">Most Popular</option>
                    <option value="newest">Newest First</option>
                    <option value="rated">Highest Rated</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Filter Tags -->
        <div class="flex flex-wrap gap-2 mb-6">
            <button class="tag-filter px-2 py-1 bg-gray-100 hover:bg-gray-200 rounded-full text-xs sm:text-sm font-medium text-gray-800" data-tag="composting">composting</button>
            <button class="tag-filter px-2 py-1 bg-gray-100 hover:bg-gray-200 rounded-full text-xs sm:text-sm font-medium text-gray-800" data-tag="gardening">gardening</button>
            <button class="tag-filter px-2 py-1 bg-gray-100 hover:bg-gray-200 rounded-full text-xs sm:text-sm font-medium text-gray-800" data-tag="waste reduction">waste reduction</button>
            <button class="tag-filter px-2 py-1 bg-gray-100 hover:bg-gray-200 rounded-full text-xs sm:text-sm font-medium text-gray-800" data-tag="solar">solar</button>
            <button class="tag-filter px-2 py-1 bg-gray-100 hover:bg-gray-200 rounded-full text-xs sm:text-sm font-medium text-gray-800" data-tag="DIY">DIY</button>
            <button class="tag-filter px-2 py-1 bg-gray-100 hover:bg-gray-200 rounded-full text-xs sm:text-sm font-medium text-gray-800" data-tag="renewable energy">renewable energy</button>
            <button class="tag-filter px-2 py-1 bg-gray-100 hover:bg-gray-200 rounded-full text-xs sm:text-sm font-medium text-gray-800" data-tag="water heating">water heating</button>
            <button class="tag-filter px-2 py-1 bg-gray-100 hover:bg-gray-200 rounded-full text-xs sm:text-sm font-medium text-gray-800" data-tag="plastic-free">plastic-free</button>
            <button class="tag-filter px-2 py-1 bg-gray-100 hover:bg-gray-200 rounded-full text-xs sm:text-sm font-medium text-gray-800" data-tag="zero waste">zero waste</button>
            <button class="tag-filter px-2 py-1 bg-gray-100 hover:bg-gray-200 rounded-full text-xs sm:text-sm font-medium text-gray-800" data-tag="kitchen">kitchen</button>
        </div>

        <!-- Resource Cards Grid -->
        <div class="resource-cards grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Resource Card 1: Home Composting -->
            <div class="bg-white overflow-hidden border border-gray-300 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <div class="p-4 sm:p-6">
                    <div class="flex items-center mb-3 sm:mb-4">
                        <div class="bg-green-100 p-1 sm:p-2 rounded-full">
                            <svg class="h-5 sm:h-6 w-5 sm:w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <span class="ml-2 px-1 sm:px-2 py-0.5 sm:py-1 bg-green-600 text-white text-xs rounded-md">guide</span>
                    </div>
                    <h2 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Complete Guide to Home Composting</h2>
                    <p class="text-xs sm:text-sm text-gray-600 mb-2">By GreenThumb · 1/15/2025</p>
                    <p class="text-gray-500 text-sm mb-3 line-clamp-3">A comprehensive guide to setting up and maintaining a home composting system. Covers different methods, troubleshooting, and using the...</p>
                    <div class="flex flex-wrap gap-1 sm:gap-2 mb-3">
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">composting</span>
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">gardening</span>
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">waste reduction</span>
                    </div>
                    <div class="flex items-center justify-between pt-2 sm:pt-4 border-t border-gray-200">
                        <div class="flex items-center space-x-2 sm:space-x-4">
                            <div class="flex items-center">
                                <svg class="h-4 sm:h-5 w-4 sm:w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <span class="ml-1 text-xs sm:text-sm text-gray-600">2,743</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="h-4 sm:h-5 w-4 sm:w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="ml-1 text-xs sm:text-sm text-gray-600">4.8</span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="flex items-center px-2 sm:px-3 py-1 border border-gray-300 rounded text-xs sm:text-sm font-medium text-gray-700 hover:bg-gray-50">
                                <svg class="h-3 sm:h-4 w-3 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Download
                            </button>
                            <a href="{{ route('resource.show', 1) }}" class="flex items-center px-2 sm:px-3 py-1 bg-green-600 border border-green-600 rounded text-xs sm:text-sm font-medium text-white hover:bg-green-700">
                                <svg class="h-3 sm:h-4 w-3 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                View
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resource Card 2: DIY Solar Water Heater -->
            <div class="bg-white overflow-hidden border border-gray-300 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <div class="p-4 sm:p-6">
                    <div class="flex items-center mb-3 sm:mb-4">
                        <div class="bg-green-100 p-1 sm:p-2 rounded-full">
                            <svg class="h-5 sm:h-6 w-5 sm:w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="ml-2 px-1 sm:px-2 py-0.5 sm:py-1 bg-green-600 text-white text-xs rounded-md">video</span>
                    </div>
                    <h2 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">DIY Solar Water Heater Construction</h2>
                    <p class="text-xs sm:text-sm text-gray-600 mb-2">By SolarPowered · 2/3/2025</p>
                    <p class="text-gray-500 text-sm mb-3 line-clamp-3">Step-by-step video tutorial on how to build an inexpensive solar water heater using reclaimed materials. Perfect for off-grid cabins or...</p>
                    <div class="flex flex-wrap gap-1 sm:gap-2 mb-3">
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">solar</span>
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">DIY</span>
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">renewable energy</span>
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">water heating</span>
                    </div>
                    <div class="flex items-center justify-between pt-2 sm:pt-4 border-t border-gray-200">
                        <div class="flex items-center space-x-2 sm:space-x-4">
                            <div class="flex items-center">
                                <svg class="h-4 sm:h-5 w-4 sm:w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <span class="ml-1 text-xs sm:text-sm text-gray-600">18,543</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="h-4 sm:h-5 w-4 sm:w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="ml-1 text-xs sm:text-sm text-gray-600">4.6</span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="flex items-center px-2 sm:px-3 py-1 border border-gray-300 rounded text-xs sm:text-sm font-medium text-gray-700 hover:bg-gray-50">
                                <svg class="h-3 sm:h-4 w-3 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Download
                            </button>
                            <a href="{{ route('resource.show', 2) }}" class="flex items-center px-2 sm:px-3 py-1 bg-green-600 border border-green-600 rounded text-xs sm:text-sm font-medium text-white hover:bg-green-700">
                                <svg class="h-3 sm:h-4 w-3 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                View
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resource Card 3: Plastic-Free Kitchen -->
            <div class="bg-white overflow-hidden border border-gray-300 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <div class="p-4 sm:p-6">
                    <div class="flex items-center mb-3 sm:mb-4">
                        <div class="bg-green-100 p-1 sm:p-2 rounded-full">
                            <svg class="h-5 sm:h-6 w-5 sm:w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <span class="ml-2 px-1 sm:px-2 py-0.5 sm:py-1 bg-green-600 text-white text-xs rounded-md">article</span>
                    </div>
                    <h2 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Plastic-Free Kitchen: A Beginner's Guide</h2>
                    <p class="text-xs sm:text-sm text-gray-600 mb-2">By ZeroWaste · 3/10/2025</p>
                    <p class="text-gray-500 text-sm mb-3 line-clamp-3">An illustrated guide to eliminating single-use plastics from your kitchen. Includes product recommendations, DIY alternatives, and habit-...</p>
                    <div class="flex flex-wrap gap-1 sm:gap-2 mb-3">
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">plastic-free</span>
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">zero waste</span>
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">kitchen</span>
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">beginner</span>
                    </div>
                    <div class="flex items-center justify-between pt-2 sm:pt-4 border-t border-gray-200">
                        <div class="flex items-center space-x-2 sm:space-x-4">
                            <div class="flex items-center">
                                <svg class="h-4 sm:h-5 w-4 sm:w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <span class="ml-1 text-xs sm:text-sm text-gray-600">9,372</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="h-4 sm:h-5 w-4 sm:w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="ml-1 text-xs sm:text-sm text-gray-600">4.9</span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="flex items-center px-2 sm:px-3 py-1 border border-gray-300 rounded text-xs sm:text-sm font-medium text-gray-700 hover:bg-gray-50">
                                <svg class="h-3 sm:h-4 w-3 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Download
                            </button>
                            <a href="{{ route('resource.show', 3) }}" class="flex items-center px-2 sm:px-3 py-1 bg-green-600 border border-green-600 rounded text-xs sm:text-sm font-medium text-white hover:bg-green-700">
                                <svg class="h-3 sm:h-4 w-3 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                View
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resource Card 4: Seasonal Planting Calendar -->
            <div class="bg-white overflow-hidden border border-gray-300 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <div class="p-4 sm:p-6">
                    <div class="flex items-center mb-3 sm:mb-4">
                        <div class="bg-green-100 p-1 sm:p-2 rounded-full">
                            <svg class="h-5 sm:h-6 w-5 sm:w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <span class="ml-2 px-1 sm:px-2 py-0.5 sm:py-1 bg-green-600 text-white text-xs rounded-md">guide</span>
                    </div>
                    <h2 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Seasonal Planting Calendar by Climate</h2>
                    <p class="text-xs sm:text-sm text-gray-600 mb-2">By GardenGuru · 2/28/2025</p>
                    <p class="text-gray-500 text-sm mb-3 line-clamp-3">Comprehensive planting guides organized by climate zone. Learn what to plant when for maximum yield and sustainability in your garden.</p>
                    <div class="flex flex-wrap gap-1 sm:gap-2 mb-3">
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">gardening</span>
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">sustainability</span>
                    </div>
                    <div class="flex items-center justify-between pt-2 sm:pt-4 border-t border-gray-200">
                        <div class="flex items-center space-x-2 sm:space-x-4">
                            <div class="flex items-center">
                                <svg class="h-4 sm:h-5 w-4 sm:w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <span class="ml-1 text-xs sm:text-sm text-gray-600">3,452</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="h-4 sm:h-5 w-4 sm:w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="ml-1 text-xs sm:text-sm text-gray-600">4.7</span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="flex items-center px-2 sm:px-3 py-1 border border-gray-300 rounded text-xs sm:text-sm font-medium text-gray-700 hover:bg-gray-50">
                                <svg class="h-3 sm:h-4 w-3 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Download
                            </button>
                            <a href="{{ route('resource.show', 4) }}" class="flex items-center px-2 sm:px-3 py-1 bg-green-600 border border-green-600 rounded text-xs sm:text-sm font-medium text-white hover:bg-green-700">
                                <svg class="h-3 sm:h-4 w-3 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                View
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resource Card 5: Beeswax Food Wraps -->
            <div class="bg-white overflow-hidden border border-gray-300 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <div class="p-4 sm:p-6">
                    <div class="flex items-center mb-3 sm:mb-4">
                        <div class="bg-green-100 p-1 sm:p-2 rounded-full">
                            <svg class="h-5 sm:h-6 w-5 sm:w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="ml-2 px-1 sm:px-2 py-0.5 sm:py-1 bg-green-600 text-white text-xs rounded-md">video</span>
                    </div>
                    <h2 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Making Beeswax Food Wraps Tutorial</h2>
                    <p class="text-xs sm:text-sm text-gray-600 mb-2">By EcoKitchen · 3/5/2025</p>
                    <p class="text-gray-500 text-sm mb-3 line-clamp-3">Step-by-step tutorial on how to make your own beeswax food wraps as a sustainable alternative to plastic wrap. Includes material list and troubleshooting tips.</p>
                    <div class="flex flex-wrap gap-1 sm:gap-2 mb-3">
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">zero waste</span>
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">DIY</span>
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">kitchen</span>
                    </div>
                    <div class="flex items-center justify-between pt-2 sm:pt-4 border-t border-gray-200">
                        <div class="flex items-center space-x-2 sm:space-x-4">
                            <div class="flex items-center">
                                <svg class="h-4 sm:h-5 w-4 sm:w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <span class="ml-1 text-xs sm:text-sm text-gray-600">12,786</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="h-4 sm:h-5 w-4 sm:w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="ml-1 text-xs sm:text-sm text-gray-600">4.8</span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="flex items-center px-2 sm:px-3 py-1 border border-gray-300 rounded text-xs sm:text-sm font-medium text-gray-700 hover:bg-gray-50">
                                <svg class="h-3 sm:h-4 w-3 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Download
                            </button>
                            <a href="{{ route('resource.show', 5) }}" class="flex items-center px-2 sm:px-3 py-1 bg-green-600 border border-green-600 rounded text-xs sm:text-sm font-medium text-white hover:bg-green-700">
                                <svg class="h-3 sm:h-4 w-3 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                View
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resource Card 6: Community Repair Hub -->
            <div class="bg-white overflow-hidden border border-gray-300 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                <div class="p-4 sm:p-6">
                    <div class="flex items-center mb-3 sm:mb-4">
                        <div class="bg-green-100 p-1 sm:p-2 rounded-full">
                            <svg class="h-5 sm:h-6 w-5 sm:w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <span class="ml-2 px-1 sm:px-2 py-0.5 sm:py-1 bg-green-600 text-white text-xs rounded-md">article</span>
                    </div>
                    <h2 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Guide to Setting Up a Community Repair Hub</h2>
                    <p class="text-xs sm:text-sm text-gray-600 mb-2">By RepairCollective · 2/17/2025</p>
                    <p class="text-gray-500 text-sm mb-3 line-clamp-3">A complete framework for establishing a community repair center where people can fix broken items instead of replacing them. Includes organizational structure, tool lists, and event planning.</p>
                    <div class="flex flex-wrap gap-1 sm:gap-2 mb-3">
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">waste reduction</span>
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">community</span>
                        <span class="px-1 sm:px-2 py-0.5 sm:py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">DIY</span>
                    </div>
                    <div class="flex items-center justify-between pt-2 sm:pt-4 border-t border-gray-200">
                        <div class="flex items-center space-x-2 sm:space-x-4">
                            <div class="flex items-center">
                                <svg class="h-4 sm:h-5 w-4 sm:w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <span class="ml-1 text-xs sm:text-sm text-gray-600">5,128</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="h-4 sm:h-5 w-4 sm:w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="ml-1 text-xs sm:text-sm text-gray-600">4.7</span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="flex items-center px-2 sm:px-3 py-1 border border-gray-300 rounded text-xs sm:text-sm font-medium text-gray-700 hover:bg-gray-50">
                                <svg class="h-3 sm:h-4 w-3 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Download
                            </button>
                            <a href="{{ route('resource.show', 6) }}" class="flex items-center px-2 sm:px-3 py-1 bg-green-600 border border-green-600 rounded text-xs sm:text-sm font-medium text-white hover:bg-green-700">
                                <svg class="h-3 sm:h-4 w-3 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                View
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination Controls -->
        <div class="mt-6 sm:mt-8 flex justify-center">
            <nav class="relative z-0 inline-flex shadow-sm rounded-md">
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Previous</span>
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <a href="#" class="relative inline-flex items-center px-3 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                    1
                </a>
                <a href="#" class="relative inline-flex items-center px-3 py-2 border border-gray-300 bg-green-600 text-sm font-medium text-white hover:bg-green-700">
                    2
                </a>
                <a href="#" class="relative inline-flex items-center px-3 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                    3
                </a>
                <span class="relative inline-flex items-center px-3 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                    ...
                </span>
                <a href="#" class="relative inline-flex items-center px-3 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                    8
                </a>
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </nav>
        </div>
    </div>
</div>

<!-- Add JavaScript at the bottom of the file -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const typeFilter = document.getElementById('typeFilter');
        const sortFilter = document.getElementById('sortFilter');
        const tagFilters = document.querySelectorAll('.tag-filter');
        const resourceCards = document.querySelectorAll('.resource-cards > div');

        // Convert NodeList to Array for sorting
        const resourceArray = Array.from(resourceCards);
        let selectedTags = [];

        // Toggle tag filter and update selectedTags
        tagFilters.forEach(button => {
            button.addEventListener('click', function () {
                const tag = this.getAttribute('data-tag');
                const index = selectedTags.indexOf(tag);

                if (index === -1) {
                    // Add tag to selectedTags and apply active styles
                    selectedTags.push(tag);
                    this.classList.remove('bg-gray-100', 'hover:bg-gray-200', 'text-gray-800');
                    this.classList.add('bg-green-600', 'text-white');
                } else {
                    // Remove tag from selectedTags and revert styles
                    selectedTags.splice(index, 1);
                    this.classList.remove('bg-green-600', 'text-white');
                    this.classList.add('bg-gray-100', 'hover:bg-gray-200', 'text-gray-800');
                }

                filterAndSortResources();
            });
        });

        // Function to filter and sort resources
        function filterAndSortResources() {
            const searchTerm = searchInput.value.toLowerCase().trim();
            const selectedType = typeFilter.value.toLowerCase();

            // Filter resources
            const filteredResources = resourceArray.filter(card => {
                const title = card.querySelector('h2').textContent.toLowerCase();
                const type = card.querySelector('span.bg-green-600').textContent.toLowerCase();
                const cardTags = Array.from(card.querySelectorAll('.flex-wrap span.bg-gray-100')).map(span => span.textContent.toLowerCase());

                // Check search term (title only)
                const matchesSearch = title.includes(searchTerm);

                // Check type filter
                const matchesType = selectedType === 'all' || type === selectedType;

                // Check tag filter (resource must have all selected tags)
                const matchesTags = selectedTags.length === 0 || selectedTags.every(tag => cardTags.includes(tag));

                return matchesSearch && matchesType && matchesTags;
            });

            // Sort the filtered resources
            const selectedSort = sortFilter.value;
            if (selectedSort !== 'default') {
                filteredResources.sort((a, b) => {
                    let valueA, valueB;

                    switch (selectedSort) {
                        case 'popular':
                            valueA = parseInt(a.querySelector('span.ml-1').textContent.replace(',', '')) || 0;
                            valueB = parseInt(b.querySelector('span.ml-1').textContent.replace(',', '')) || 0;
                            return valueB - valueA; // Descending order (most popular first)
                        case 'newest':
                            valueA = new Date(a.querySelector('p.text-gray-600').textContent.split('·')[1].trim());
                            valueB = new Date(b.querySelector('p.text-gray-600').textContent.split('·')[1].trim());
                            return valueB - valueA; // Newest first
                        case 'rated':
                            valueA = parseFloat(a.querySelectorAll('span.ml-1')[1].textContent) || 0;
                            valueB = parseFloat(b.querySelectorAll('span.ml-1')[1].textContent) || 0;
                            return valueB - valueA; // Highest rated first
                    }
                });
            }

            // Re-append sorted and filtered resources to the DOM
            const resourceContainer = document.querySelector('.resource-cards');
            resourceContainer.innerHTML = '';
            filteredResources.forEach(card => resourceContainer.appendChild(card));

            // Show all cards if no filters are applied, but respect sorting
            if (searchTerm === '' && selectedType === 'all' && selectedTags.length === 0 && selectedSort === 'default') {
                resourceContainer.innerHTML = '';
                resourceArray.forEach(card => resourceContainer.appendChild(card));
            }
        }

        // Event listeners
        searchInput.addEventListener('input', filterAndSortResources);
        typeFilter.addEventListener('change', filterAndSortResources);
        sortFilter.addEventListener('change', filterAndSortResources);
    });
</script>
@endsection