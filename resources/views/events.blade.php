@extends('layouts.app')
@section('content')
<!-- <style>
    /* Fallback for hidden class in case Tailwind CSS isn't working */
    .hidden {
        display: none !important;
    }
</style> -->

<div class="p-4">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Events & Workshops</h1>
                <p class="text-gray-600 text-sm mt-1">Find and register for upcoming sustainability events near you.</p>
            </div>
            @auth
                <button class="mt-4 sm:mt-0 bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md text-sm sm:text-base" id="uploadResourceBtn">
                    Create Event
                </button>
            @else
                <a href="{{ route('login') }}" class="mt-4 sm:mt-0 bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md text-sm sm:text-base">
                    Log In to Create Event
                </a>
            @endauth
        </div>

        <!-- Search and Filter Bar -->
        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center space-x-4">
                <div class="relative flex-grow">
                    <input type="text" id="searchInput" placeholder="Search events..." class="text-sm w-48 px-3 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-700 font-medium">Type:</span>
                    <button class="type-filter px-2 py-0.5 bg-green-600 text-white rounded-full text-xs font-medium" data-type="all">ALL</button>
                    <button class="type-filter px-2 py-0.5 bg-white border border-gray-300 rounded-full text-xs font-medium text-gray-800 hover:bg-gray-100" data-type="workshop">Workshop</button>
                    <button class="type-filter px-2 py-0.5 bg-white border border-gray-300 rounded-full text-xs font-medium text-gray-800 hover:bg-gray-100" data-type="panel">Panel</button>
                    <button class="type-filter px-2 py-0.5 bg-white border border-gray-300 rounded-full text-xs font-medium text-gray-800 hover:bg-gray-100" data-type="webinar">Webinar</button>
                    <button class="type-filter px-2 py-0.5 bg-white border border-gray-300 rounded-full text-xs font-medium text-gray-800 hover:bg-gray-100" data-type="class">Class</button>
                    <button class="type-filter px-2 py-0.5 bg-white border border-gray-300 rounded-full text-xs font-medium text-gray-800 hover:bg-gray-100" data-type="festival">Festival</button>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-700 font-medium">Format:</span>
                    <button class="format-filter px-2 py-0.5 bg-green-600 text-white rounded-full text-xs font-medium" data-format="all">ALL</button>
                    <button class="format-filter px-2 py-0.5 bg-white border border-gray-300 rounded-full text-xs font-medium text-gray-800 hover:bg-gray-100 flex items-center" data-format="in-person">
                        <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.243l-4.243-4.243m0 0L9.172 7.757m4.242 4.243h-4.243m4.243 0v4.243" />
                        </svg>
                        In-Person
                    </button>
                    <button class="format-filter px-2 py-0.5 bg-white border border-gray-300 rounded-full text-xs font-medium text-gray-800 hover:bg-gray-100 flex items-center" data-format="online">
                        <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5h6m-3-3v6m-3 3h6m-9 3h12" />
                        </svg>
                        Online
                    </button>
                    <button class="format-filter px-2 py-0.5 bg-white border border-gray-300 rounded-full text-xs font-medium text-gray-800 hover:bg-gray-100" data-format="hybrid">Hybrid</button>
                </div>
            </div>
        </div>

        <!-- Main Content: Events Grid or Add Details Page -->
        <div id="mainContent">
            <!-- Events Grid (default view) -->
            <div id="eventsGrid" class="event-cards grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-15">
                <!-- Event Card 1 -->
                <div class="bg-white overflow-hidden border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition-shadow" data-type="workshop" data-format="in-person">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1518495973542-4542c06a5843" alt="Event Image" class="w-full h-full object-cover">
                        <span class="absolute top-2 left-2 px-2 py-0.5 bg-green-600 text-white text-xs rounded-md">Workshop</span>
                        <span class="absolute top-2 right-2 bg-white p-1 rounded-full">
                            <svg class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.243l-4.243-4.243m0 0L9.172 7.757m4.242 4.243h-4.243m4.243 0v4.243" />
                            </svg>
                        </span>
                    </div>
                    <div class="p-4">
                        <h2 class="text-md font-bold text-gray-900 mb-1">Urban Gardening Workshop</h2>
                        <p class="text-xs text-gray-600 mb-2">Organized by City Greening Initiative</p>
                        <div class="flex items-center mb-1">
                            <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs text-gray-600">Thu, May 15, 10:00 AM</span>
                        </div>
                        <div class="flex items-center mb-1">
                            <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs text-gray-600">3 hours</span>
                        </div>
                        <div class="flex items-center mb-2">
                            <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.243l-4.243-4.243m0 0L9.172 7.757m4.242 4.243h-4.243m4.243 0v4.243" />
                            </svg>
                            <span class="text-xs text-gray-600">Community Center, Portland, OR</span>
                        </div>
                        <p class="text-gray-700 text-xs mb-2">Learn practical techniques for growing food in small urban spaces. This hands-on workshop...</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-600">18/30 spots filled</span>
                            <button class="bg-green-600 hover:bg-green-700 text-white font-medium py-1 px-3 rounded text-xs">
                                Register
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="bg-white overflow-hidden border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition-shadow" data-type="panel" data-format="online">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9" alt="Event Image" class="w-full h-full object-cover">
                        <span class="absolute top-2 left-2 px-2 py-0.5 bg-gray-200 text-gray-800 text-xs rounded-md">Panel</span>
                        <span class="absolute top-2 right-2 bg-white p-1 rounded-full">
                            <svg class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.243l-4.243-4.243m0 0L9.172 7.757m4.242 4.243h-4.243m4.243 0v4.243" />
                            </svg>
                        </span>
                    </div>
                    <div class="p-3">
                        <h2 class="text-md font-bold text-gray-900 mb-1">Sustainable Fashion Panel Discussion</h2>
                        <p class="text-xs text-gray-600 mb-2">Organized by Eco Fashion Collective</p>
                        <div class="flex items-center mb-1">
                            <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs text-gray-600">Tue, Apr 22, 6:30 PM</span>
                        </div>
                        <div class="flex items-center mb-1">
                            <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs text-gray-600">1.5 hours</span>
                        </div>
                        <div class="flex items-center mb-2">
                            <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5h6m-3-3v6m-3 3h6m-9 3h12" />
                            </svg>
                            <span class="text-xs text-gray-600">Zoom Webinar</span>
                        </div>
                        <p class="text-gray-700 text-xs mb-2">Join industry experts for a discussion on sustainable practices in fashion, including ethical...</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-600">142/300 spots filled</span>
                            <button class="bg-green-600 hover:bg-green-700 text-white font-medium py-1 px-3 rounded text-xs">
                                Register
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 3 -->
                <div class="bg-white overflow-hidden border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition-shadow" data-type="workshop" data-format="in-person">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1465146344425-f00d5f5c8f07" alt="Event Image" class="w-full h-full object-cover">
                        <span class="absolute top-2 left-2 px-2 py-0.5 bg-green-600 text-white text-xs rounded-md">Workshop</span>
                        <span class="absolute top-2 right-2 bg-white p-1 rounded-full">
                            <svg class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.243l-4.243-4.243m0 0L9.172 7.757m4.242 4.243h-4.243m4.243 0v4.243" />
                            </svg>
                        </span>
                    </div>
                    <div class="p-3">
                        <h2 class="text-md font-bold text-gray-900 mb-1">Community Bike Repair Workshop</h2>
                        <p class="text-xs text-gray-600 mb-2">Organized by Green Transportation Alliance</p>
                        <div class="flex items-center mb-1">
                            <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs text-gray-600">Thu, Jun 5, 9:00 AM</span>
                        </div>
                        <div class="flex items-center mb-1">
                            <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs text-gray-600">4 hours</span>
                        </div>
                        <div class="flex items-center mb-2">
                            <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.243l-4.243-4.243m0 0L9.172 7.757m4.242 4.243h-4.243m4.243 0v4.243" />
                            </svg>
                            <span class="text-xs text-gray-600">Central Park, Austin, TX</span>
                        </div>
                        <p class="text-gray-700 text-xs mb-2">Learn to repair and maintain your bike with this hands-on workshop organized by the Green...</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-600">25/40 spots filled</span>
                            <button class="bg-green-600 hover:bg-green-700 text-white font-medium py-1 px-3 rounded text-xs">
                                Register
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 4 -->
                <div class="bg-white overflow-hidden border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition-shadow" data-type="webinar" data-format="online">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1501854140801-50d01698950b" alt="Event Image" class="w-full h-full object-cover">
                        <span class="absolute top-2 left-2 px-2 py-0.5 bg-gray-200 text-gray-800 text-xs rounded-md">Webinar</span>
                        <span class="absolute top-2 right-2 bg-white p-1 rounded-full">
                            <svg class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.243l-4.243-4.243m0 0L9.172 7.757m4.242 4.243h-4.243m4.243 0v4.243" />
                            </svg>
                        </span>
                    </div>
                    <div class="p-3">
                        <h2 class="text-md font-bold text-gray-900 mb-1">Renewable Energy Home Solutions</h2>
                        <p class="text-xs text-gray-600 mb-2">Organized by Clean Energy Network</p>
                        <div class="flex items-center mb-1">
                            <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs text-gray-600">Wed, Apr 30, 7:00 PM</span>
                        </div>
                        <div class="flex items-center mb-1">
                            <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs text-gray-600">1 hour</span>
                        </div>
                        <div class="flex items-center mb-2">
                            <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5h6m-3-3v6m-3 3h6m-9 3h12" />
                            </svg>
                            <span class="text-xs text-gray-600">YouTube Live</span>
                        </div>
                        <p class="text-gray-700 text-xs mb-2">Explore renewable energy solutions for your home in this informative webinar hosted by the Clean...</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-600">No limit</span>
                            <button class="bg-green-600 hover:bg-green-700 text-white font-medium py-1 px-3 rounded text-xs">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Details Page (hidden by default) -->
            <div id="addDetailsPage" class="hidden bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto mt-15">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Add Event Details</h2>
                <div class="space-y-4">
                    <div>
                        <label for="eventTitle" class="block text-sm font-medium text-gray-700">Event Title</label>
                        <input type="text" id="eventTitle" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., Community Bike Repair Workshop">
                    </div>
                    <div>
                        <label for="eventImage" class="block text-sm font-medium text-gray-700">Event Image URL</label>
                        <input type="text" id="eventImage" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., https://images.unsplash.com/...">
                    </div>
                    <div>
                        <label for="eventType" class="block text-sm font-medium text-gray-700">Event Type</label>
                        <select id="eventType" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="workshop">Workshop</option>
                            <option value="panel">Panel</option>
                            <option value="webinar">Webinar</option>
                            <option value="class">Class</option>
                            <option value="festival">Festival</option>
                        </select>
                    </div>
                    <div>
                        <label for="organizer" class="block text-sm font-medium text-gray-700">Organizer</label>
                        <input type="text" id="organizer" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., Green Transportation Alliance">
                    </div>
                    <div>
                        <label for="eventDateTime" class="block text-sm font-medium text-gray-700">Date and Time</label>
                        <input type="text" id="eventDateTime" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., Thu, Jun 5, 9:00 AM">
                    </div>
                    <div>
                        <label for="duration" class="block text-sm font-medium text-gray-700">Duration</label>
                        <input type="text" id="duration" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., 4 hours">
                    </div>
                    <div>
                        <label for="eventFormat" class="block text-sm font-medium text-gray-700">Format</label>
                        <select id="eventFormat" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="in-person">In-Person</option>
                            <option value="online">Online</option>
                            <option value="hybrid">Hybrid</option>
                        </select>
                    </div>
                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                        <input type="text" id="location" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., Central Park, Austin, TX">
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., Learn to repair and maintain your bike with this hands-on workshop..." rows="3"></textarea>
                    </div>
                    <div>
                        <label for="spots" class="block text-sm font-medium text-gray-700">Spots (e.g., 25/40 spots filled)</label>
                        <input type="text" id="spots" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., 25/40 spots filled">
                    </div>
                    <div class="flex justify-end space-x-3">
                        <button id="cancelBtn" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-1 px-3 rounded text-sm">Cancel</button>
                        <button id="saveEventBtn" class="bg-green-600 hover:bg-green-700 text-white font-medium py-1 px-3 rounded text-sm">Save Event</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Navigation, Local Storage, and Event Rendering -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const createEventBtn = document.getElementById('uploadResourceBtn');
    const eventsGrid = document.getElementById('eventsGrid');
    const addDetailsPage = document.getElementById('addDetailsPage');
    const saveEventBtn = document.getElementById('saveEventBtn');
    const cancelBtn = document.getElementById('cancelBtn');
    const searchInput = document.getElementById('searchInput');
    const typeFilters = document.querySelectorAll('.type-filter');
    const formatFilters = document.querySelectorAll('.format-filter');

    let selectedType = 'all';
    let selectedFormat = 'all';

    // Show Add Details page when Create Event is clicked
    if (createEventBtn) {
        createEventBtn.addEventListener('click', function () {
            eventsGrid.classList.add('hidden');
            addDetailsPage.classList.remove('hidden');
        });
    } else {
        console.error('createEventBtn not found');
    }

    // Cancel button to return to events grid
    cancelBtn.addEventListener('click', function () {
        addDetailsPage.classList.add('hidden');
        eventsGrid.classList.remove('hidden');
        clearForm();
    });

    // Save event and render it
    saveEventBtn.addEventListener('click', function () {
        const event = {
            title: document.getElementById('eventTitle').value,
            image: document.getElementById('eventImage').value,
            type: document.getElementById('eventType').value.toLowerCase(),
            organizer: document.getElementById('organizer').value,
            dateTime: document.getElementById('eventDateTime').value,
            duration: document.getElementById('duration').value,
            format: document.getElementById('eventFormat').value.toLowerCase(),
            location: document.getElementById('location').value,
            description: document.getElementById('description').value,
            spots: document.getElementById('spots').value
        };

        // Validate required fields
        if (!event.title || !event.image || !event.type || !event.organizer || !event.dateTime || !event.duration || !event.format || !event.location || !event.description || !event.spots) {
            alert('Please fill in all fields.');
            return;
        }

        // Save to localStorage
        const storedEvents = JSON.parse(localStorage.getItem('events')) || [];
        storedEvents.push(event);
        localStorage.setItem('events', JSON.stringify(storedEvents));

        // Render the new event
        renderEvent(event);

        // Switch back to events grid
        addDetailsPage.classList.add('hidden');
        eventsGrid.classList.remove('hidden');
        clearForm();

        // Apply filters
        filterEvents();
    });

    // Load and normalize events from localStorage on page load
    let storedEvents = JSON.parse(localStorage.getItem('events')) || [];
    storedEvents = storedEvents.filter(event => {
        if (!event || typeof event !== 'object' || !event.title || !event.type || !event.format) {
            console.warn('Skipping invalid event:', event);
            return false;
        }
        return true;
    });
    storedEvents = storedEvents.map(event => ({
        title: event.title || 'Untitled Event',
        image: event.image || 'https://via.placeholder.com/150',
        type: event.type?.toLowerCase() || 'workshop',
        organizer: event.organizer || 'Unknown Organizer',
        dateTime: event.dateTime || 'Unknown Date',
        duration: event.duration || 'Unknown Duration',
        format: event.format?.toLowerCase() || 'in-person',
        location: event.location || 'Unknown Location',
        description: event.description || 'No description provided',
        spots: event.spots || 'No limit'
    }));
    storedEvents.forEach(event => renderEvent(event));
    localStorage.setItem('events', JSON.stringify(storedEvents));

    // Function to render a new event card
    function renderEvent(event) {
        if (!event || !event.type || !event.format) {
            console.warn('Invalid event object, skipping render:', event);
            return;
        }

        const typeColor = (event.type.toLowerCase() === 'workshop') ? 'bg-green-600 text-white' : 'bg-gray-200 text-gray-800';
        const formatIcon = (event.format.toLowerCase() === 'online') ?
            '<svg class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5h6m-3-3v6m-3 3h6m-9 3h12" /></svg>' :
            '<svg class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.243l-4.243-4.243m0 0L9.172 7.757m4.242 4.243h-4.243m4.243 0v4.243" /></svg>';

        const eventCard = document.createElement('div');
        eventCard.className = 'bg-white overflow-hidden border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition-shadow';
        eventCard.setAttribute('data-type', event.type.toLowerCase());
        eventCard.setAttribute('data-format', event.format.toLowerCase());
        eventCard.innerHTML = `
            <div class="relative">
                <img src="${event.image || 'https://via.placeholder.com/150'}" alt="Event Image" class="w-full h-full object-cover">
                <span class="absolute top-2 left-2 px-2 py-0.5 ${typeColor} text-xs rounded-md">${event.type.charAt(0).toUpperCase() + event.type.slice(1)}</span>
                <span class="absolute top-2 right-2 bg-white p-1 rounded-full">
                    ${formatIcon}
                </span>
            </div>
            <div class="p-3">
                <h2 class="text-md font-bold text-gray-900 mb-1">${event.title}</h2>
                <p class="text-xs text-gray-600 mb-2">Organized by ${event.organizer}</p>
                <div class="flex items-center mb-1">
                    <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="text-xs text-gray-600">${event.dateTime}</span>
                </div>
                <div class="flex items-center mb-1">
                    <svg class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-xs text-gray-600">${event.duration}</span>
                </div>
                <div class="flex items-center mb-2">
                    ${formatIcon}
                    <span class="text-xs text-gray-600">${event.location}</span>
                </div>
                <p class="text-gray-700 text-xs mb-2">${event.description}</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-600">${event.spots}</span>
                    <div class="flex space-x-2">
                        <button class="bg-green-600 hover:bg-green-700 text-white font-medium py-1 px-3 rounded text-xs">
                            Register
                        </button>
                        <button class="delete-btn bg-red-600 hover:bg-red-700 text-white font-medium py-1 px-3 rounded text-xs" data-title="${event.title}">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        `;
        eventsGrid.appendChild(eventCard);
    }

    // Function to delete an event
    function deleteEvent(title) {
        let storedEvents = JSON.parse(localStorage.getItem('events')) || [];
        storedEvents = storedEvents.filter(event => event.title !== title);
        localStorage.setItem('events', JSON.stringify(storedEvents));
        const cardToRemove = Array.from(document.querySelectorAll('.event-cards > div')).find(card => card.querySelector('h2')?.textContent === title);
        if (cardToRemove) cardToRemove.remove();
        filterEvents();
    }

    // Add event listener for delete buttons
    eventsGrid.addEventListener('click', function (e) {
        if (e.target.classList.contains('delete-btn')) {
            const title = e.target.getAttribute('data-title');
            if (confirm(`Are you sure you want to delete "${title}"?`)) {
                deleteEvent(title);
            }
        }
    });

    // Function to clear the form
    function clearForm() {
        document.getElementById('eventTitle').value = '';
        document.getElementById('eventImage').value = '';
        document.getElementById('eventType').value = 'workshop';
        document.getElementById('organizer').value = '';
        document.getElementById('eventDateTime').value = '';
        document.getElementById('duration').value = '';
        document.getElementById('eventFormat').value = 'in-person';
        document.getElementById('location').value = '';
        document.getElementById('description').value = '';
        document.getElementById('spots').value = '';
    }

    // Function to filter events
    function filterEvents() {
        try {
            const searchTerm = searchInput.value.toLowerCase().trim();
            const eventCards = document.querySelectorAll('.event-cards > div');
            eventCards.forEach(card => {
                const titleElement = card.querySelector('h2');
                const title = titleElement ? titleElement.textContent.toLowerCase() : '';
                const type = card.getAttribute('data-type')?.toLowerCase() || '';
                const format = card.getAttribute('data-format')?.toLowerCase() || '';
                const matchesSearch = !searchTerm || title.includes(searchTerm);
                const matchesType = selectedType === 'all' || type === selectedType;
                const matchesFormat = selectedFormat === 'all' || format === selectedFormat;
                card.style.display = matchesSearch && matchesType && matchesFormat ? 'grid' : 'none';
            });
        } catch (error) {
            console.error('Error in filterEvents:', error);
        }
    }

    // Event listeners for filtering
    searchInput.addEventListener('input', filterEvents);

    typeFilters.forEach(button => {
        button.addEventListener('click', function () {
            typeFilters.forEach(btn => {
                btn.classList.remove('bg-green-600', 'text-white');
                btn.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-800', 'hover:bg-gray-100');
            });
            this.classList.remove('bg-white', 'border', 'border-gray-300', 'text-gray-800', 'hover:bg-gray-100');
            this.classList.add('bg-green-600', 'text-white');
            selectedType = this.getAttribute('data-type').toLowerCase();
            filterEvents();
        });
    });

    formatFilters.forEach(button => {
        button.addEventListener('click', function () {
            formatFilters.forEach(btn => {
                btn.classList.remove('bg-green-600', 'text-white');
                btn.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-800', 'hover:bg-gray-100');
            });
            this.classList.remove('bg-white', 'border', 'border-gray-300', 'text-gray-800', 'hover:bg-gray-100');
            this.classList.add('bg-green-600', 'text-white');
            selectedFormat = this.getAttribute('data-format').toLowerCase();
            filterEvents();
        });
    });

    // Apply filters on page load
    filterEvents();
});
</script>
@endsection