@extends('layouts.app')

@section('content')
<div class="p-4 sm:p-6">
    <div class="max-w-7xl mx-auto">
        <!-- Back to Resources Link -->
        <a href="{{ route('resources') }}" class="inline-flex items-center text-gray-700 hover:text-gray-900 mb-6">
            <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Resources
        </a>

        <!-- Resource Details -->
        @php
            // Simulate database data with an array
            $resources = [
                1 => [
                    'type' => 'guide',
                    'title' => 'Complete Guide to Home Composting',
                    'author' => 'GreenThumb',
                    'date' => '1/15/2025',
                    'description' => 'A comprehensive guide to setting up and maintaining a home composting system. Covers different methods, troubleshooting, and using the finished compost.',
                    'views' => '2,743',
                    'downloads' => '1,458',
                    'rating' => '4.8',
                    'tags' => ['composting', 'gardening', 'waste reduction'],
                ],
                2 => [
                    'type' => 'video',
                    'title' => 'DIY Solar Water Heater Construction',
                    'author' => 'SolarPowered',
                    'date' => '2/3/2025',
                    'description' => 'Step-by-step video tutorial on how to build an inexpensive solar water heater using reclaimed materials. Perfect for off-grid cabins or sustainable living.',
                    'views' => '18,543',
                    'downloads' => '5,672',
                    'rating' => '4.6',
                    'tags' => ['solar', 'DIY', 'renewable energy', 'water heating'],
                ],
                3 => [
                    'type' => 'article',
                    'title' => 'Plastic-Free Kitchen: A Beginner\'s Guide',
                    'author' => 'ZeroWaste',
                    'date' => '3/10/2025',
                    'description' => 'An illustrated guide to eliminating single-use plastics from your kitchen. Includes product recommendations, DIY alternatives, and habit-building tips.',
                    'views' => '9,372',
                    'downloads' => '3,214',
                    'rating' => '4.9',
                    'tags' => ['plastic-free', 'zero waste', 'kitchen', 'beginner'],
                ],
                4 => [
                    'type' => 'guide',
                    'title' => 'Seasonal Planting Calendar by Climate',
                    'author' => 'GardenGuru',
                    'date' => '2/28/2025',
                    'description' => 'Comprehensive planting guides organized by climate zone. Learn what to plant when for maximum yield and sustainability in your garden.',
                    'views' => '3,452',
                    'downloads' => '1,789',
                    'rating' => '4.7',
                    'tags' => ['gardening', 'sustainability'],
                ],
                5 => [
                    'type' => 'video',
                    'title' => 'Making Beeswax Food Wraps Tutorial',
                    'author' => 'EcoKitchen',
                    'date' => '3/5/2025',
                    'description' => 'Step-by-step tutorial on how to make your own beeswax food wraps as a sustainable alternative to plastic wrap. Includes material list and troubleshooting tips.',
                    'views' => '12,786',
                    'downloads' => '4,321',
                    'rating' => '4.8',
                    'tags' => ['zero waste', 'DIY', 'kitchen'],
                ],
                6 => [
                    'type' => 'article',
                    'title' => 'Guide to Setting Up a Community Repair Hub',
                    'author' => 'RepairCollective',
                    'date' => '2/17/2025',
                    'description' => 'A complete framework for establishing a community repair center where people can fix broken items instead of replacing them. Includes organizational structure, tool lists, and event planning.',
                    'views' => '5,128',
                    'downloads' => '2,345',
                    'rating' => '4.7',
                    'tags' => ['waste reduction', 'community', 'DIY'],
                ],
            ];

            // Get the resource ID from the route
            $id = request()->route('id');
            $resource = $resources[$id] ?? null;

            // Handle case where resource is not found
            if (!$resource) {
                abort(404, 'Resource not found');
            }
        @endphp

        <div class="bg-white rounded-lg shadow-sm p-6">
            <!-- Resource Type and Title -->
            <div class="flex items-center mb-4">
                <div class="bg-green-100 p-2 rounded-full">
                    @if($resource['type'] == 'guide')
                        <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    @elseif($resource['type'] == 'video')
                        <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    @elseif($resource['type'] == 'article')
                        <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    @endif
                </div>
                <span class="ml-2 px-2 py-1 bg-green-600 text-white text-xs rounded-md capitalize">{{ $resource['type'] }}</span>
            </div>

            <h1 class="text-2xl font-bold text-gray-900 mb-2">{{ $resource['title'] }}</h1>
            <p class="text-sm text-gray-600 mb-4">By {{ $resource['author'] }} · {{ $resource['date'] }}</p>
            <p class="text-gray-500 mb-6">{{ $resource['description'] }}</p>

            <!-- Stats -->
            <div class="flex space-x-8 mb-6">
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <span class="text-gray-700 font-medium">{{ $resource['views'] }}</span>
                    <span class="text-gray-500 ml-1">Views</span>
                </div>
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    <span class="text-gray-700 font-medium">{{ $resource['downloads'] }}</span>
                    <span class="text-gray-500 ml-1">Downloads</span>
                </div>
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-yellow-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <span class="text-gray-700 font-medium">{{ $resource['rating'] }}</span>
                    <span class="text-gray-500 ml-1">Rating</span>
                </div>
            </div>

            <!-- Tags -->
            <div class="flex flex-wrap gap-2 mb-6">
                @foreach($resource['tags'] as $tag)
                    <span class="px-2 py-1 bg-gray-100 rounded-full text-xs font-medium text-gray-800">{{ $tag }}</span>
                @endforeach
            </div>

            <!-- Buttons -->
            <div class="flex space-x-4">
                <button class="flex items-center px-4 py-2 border border-gray-300 rounded text-sm font-medium text-gray-700 hover:bg-gray-50">
                    <svg class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Download
                </button>
                <!-- <a href="#" class="flex items-center px-4 py-2 bg-green-600 border border-green-600 rounded text-sm font-medium text-white hover:bg-green-700">
                    View Resource
                </a> -->
            </div>
        </div>
    </div>
</div>
@endsection