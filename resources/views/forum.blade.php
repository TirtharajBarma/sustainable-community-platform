@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Community Forums</h1>
            <p class="text-gray-600 mt-1">Join discussions on sustainability topics and connect with like-minded individuals.</p>
        </div>
        <button class="bg-green-600 hover:bg-green-700 text-white font-medium px-4 py-2 rounded-md">
            Create New Thread
        </button>
    </div>

    <!-- Main Content -->
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Left Sidebar - Categories -->
        <div class="w-full md:w-1/4">
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-1">Categories</h2>
                <p class="text-gray-600 text-sm mb-4">Browse by topic</p>
                
                <ul class="space-y-4">
                    <li class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            <span class="text-gray-500">Waste Management</span>
                        </div>
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">46</span>
                    </li>
                    
                    <li class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span class="text-gray-500">Renewable Energy</span>
                        </div>
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">32</span>
                    </li>
                    
                    <li class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                            <span class="text-gray-500">Recycling</span>
                        </div>
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">28</span>
                    </li>
                    
                    <li class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                            <span class="text-gray-500">Sustainable Living</span>
                        </div>
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">64</span>
                    </li>
                    
                    <li class="flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <span class="text-gray-500">Eco-friendly Products</span>
                        </div>
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">37</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Right Content - Forum Threads -->
        <div class="w-full md:w-3/4">
            <!-- Search and Filter Options -->
            <div class="flex flex-col md:flex-row justify-between mb-6 gap-4">
                <div class="w-full md:w-2/3">
                    <input type="text" placeholder="Search threads..." class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
                <div class="w-full md:w-1/3 flex justify-end">
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <button type="button" class="px-4 py-2 text-sm font-medium bg-white border border-gray-300 rounded-l-md hover:bg-gray-50 focus:z-10 focus:ring-2 focus:ring-green-500 text-green-700">Latest</button>
                        <button type="button" class="px-4 py-2 text-sm font-medium bg-white border-t border-b border-r border-gray-300 hover:bg-gray-50 focus:z-10 focus:ring-2 focus:ring-green-500 text-gray-700">Popular</button>
                        <button type="button" class="px-4 py-2 text-sm font-medium bg-white border border-gray-300 rounded-r-md hover:bg-gray-50 focus:z-10 focus:ring-2 focus:ring-green-500 text-gray-700">Unanswered</button>
                    </div>
                </div>
            </div>
            
            <!-- Thread List -->
            <div class="space-y-4">
                <!-- Thread 1 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded inline-block mb-2">Waste Management</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Tips for reducing plastic waste in everyday life</h3>
                        <p class="text-sm text-gray-600 mb-3">Posted by EcoWarrior</p>
                        
                        <p class="text-gray-500 mb-4">I've been trying to minimize plastic waste in my daily routine and wanted to share some effective strategies that worked for me...</p>
                        
                        <div class="flex items-center text-sm text-gray-500 gap-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                </svg>
                                <span>24 replies</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                </svg>
                                <span>43 likes</span>
                            </div>
                            <div class="flex items-center ml-auto">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>2 hours ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Thread 2 -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded inline-block mb-2">Renewable Energy</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Solar panel installation: DIY or professional?</h3>
                        <p class="text-sm text-gray-600 mb-3">Posted by SolarPowered</p>
                        
                        <p class="text-gray-500 mb-4">I'm considering installing solar panels on my home and am weighing the pros and cons of doing it myself versus hiring professionals...</p>
                        
                        <div class="flex items-center text-sm text-gray-500 gap-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                </svg>
                                <span>31 replies</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                </svg>
                                <span>18 likes</span>
                            </div>
                            <div class="flex items-center ml-auto">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>6 hours ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection