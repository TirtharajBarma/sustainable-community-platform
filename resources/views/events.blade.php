@extends('layouts.app')

@section('content')
<div class="bg-gray-50 p-4">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Events & Workshops</h1>
                <p class="text-gray-600 text-sm mt-1">Find and register for upcoming sustainability events near you.</p>
            </div>
            <button class="bg-green-600 hover:bg-green-700 text-white font-medium py-1 px-3 rounded text-sm">
                Create Event
            </button>
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

        <!-- Event Cards Grid -->
        <div class="event-cards grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-15">
            <!-- Event Card 1 -->
            <div class="bg-white overflow-hidden border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition-shadow">
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
            <div class="bg-white overflow-hidden border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition-shadow">
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
            <div class="bg-white overflow-hidden border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition-shadow">
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
            <div class="bg-white overflow-hidden border border-gray-100 rounded-lg shadow-sm hover:shadow-md transition-shadow">
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
    </div>
</div>

<!-- Add JavaScript for Search, Type, and Format Filtering -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const typeFilters = document.querySelectorAll('.type-filter');
        const formatFilters = document.querySelectorAll('.format-filter');
        const eventCards = document.querySelectorAll('.event-cards > div');

        let selectedType = 'all';
        let selectedFormat = 'all';

        // Toggle type filter and update selectedType
        typeFilters.forEach(button => {
            button.addEventListener('click', function () {
                // Remove active styles from all type buttons
                typeFilters.forEach(btn => {
                    btn.classList.remove('bg-green-600', 'text-white');
                    btn.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-800', 'hover:bg-gray-100');
                });

                // Add active styles to the clicked button
                this.classList.remove('bg-white', 'border', 'border-gray-300', 'text-gray-800', 'hover:bg-gray-100');
                this.classList.add('bg-green-600', 'text-white');

                // Update selected type
                selectedType = this.getAttribute('data-type');
                filterEvents();
            });
        });

        // Toggle format filter and update selectedFormat
        formatFilters.forEach(button => {
            button.addEventListener('click', function () {
                // Remove active styles from all format buttons
                formatFilters.forEach(btn => {
                    btn.classList.remove('bg-green-600', 'text-white');
                    btn.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-800', 'hover:bg-gray-100');
                });

                // Add active styles to the clicked button
                this.classList.remove('bg-white', 'border', 'border-gray-300', 'text-gray-800', 'hover:bg-gray-100');
                this.classList.add('bg-green-600', 'text-white');

                // Update selected format
                selectedFormat = this.getAttribute('data-format');
                filterEvents();
            });
        });

        // Function to filter events
        function filterEvents() {
            const searchTerm = searchInput.value.toLowerCase().trim();

            eventCards.forEach(card => {
                const title = card.querySelector('h2').textContent.toLowerCase();
                const type = card.querySelector('span.rounded-md').textContent.toLowerCase().trim();
                const formatElement = card.querySelector('div.flex.items-center.mb-2 span.text-xs.text-gray-600');
                const formatText = formatElement.textContent.toLowerCase().trim();
                const format = formatText.includes('zoom') || formatText.includes('youtube') ? 'online' : 'in-person';

                // Check search term (title)
                const matchesSearch = title.includes(searchTerm);

                // Check type filter
                const matchesType = selectedType === 'all' || type === selectedType;

                // Check format filter
                const matchesFormat = selectedFormat === 'all' || format === selectedFormat;

                // Show card only if it matches all filters
                card.style.display = matchesSearch && matchesType && matchesFormat ? 'block' : 'none';
            });
        }

        // Event listeners
        searchInput.addEventListener('input', filterEvents);
    });
</script>
@endsection