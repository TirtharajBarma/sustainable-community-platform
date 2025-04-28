@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header Section -->
   <!-- Header Section -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Community Forums</h1>
            <p class="text-gray-600 mt-1">Join discussions on sustainability topics and connect with like-minded individuals.</p>
        </div>
        @auth
            <button id="createThreadBtn" class="bg-green-600 hover:bg-green-700 text-white font-medium px-4 py-2 rounded-md">
                Create New Thread
            </button>
        @else
            <a href="{{ route('login') }}" class="bg-green-600 hover:bg-green-700 text-white font-medium px-4 py-2 rounded-md">
                Log In to Create Thread
            </a>
        @endauth
    </div>

    <!-- Main Content -->
    <div id="mainContent" class="flex flex-col md:flex-row gap-6">
        <!-- Left Sidebar - Categories -->
        <div class="w-full md:w-1/4">
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-1">Categories</h2>
                <p class="text-gray-600 text-sm mb-4">Browse by topic</p>
                
                <ul class="space-y-4">
                    <li class="flex items-center justify-between category-item" data-category="all">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            <span class="text-gray-500">All Categories</span>
                        </div>
                        <span class="category-count bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">0</span>
                    </li>
                    <li class="flex items-center justify-between category-item" data-category="Waste Management">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            <span class="text-gray-500">Waste Management</span>
                        </div>
                        <span class="category-count bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">0</span>
                    </li>
                    <li class="flex items-center justify-between category-item" data-category="Renewable Energy">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span class="text-gray-500">Renewable Energy</span>
                        </div>
                        <span class="category-count bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">0</span>
                    </li>
                    <li class="flex items-center justify-between category-item" data-category="Recycling">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                            <span class="text-gray-500">Recycling</span>
                        </div>
                        <span class="category-count bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">0</span>
                    </li>
                    <li class="flex items-center justify-between category-item" data-category="Sustainable Living">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                            <span class="text-gray-500">Sustainable Living</span>
                        </div>
                        <span class="category-count bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">0</span>
                    </li>
                    <li class="flex items-center justify-between category-item" data-category="Eco-friendly Products">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <span class="text-gray-500">Eco-friendly Products</span>
                        </div>
                        <span class="category-count bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">0</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Right Content - Forum Threads or Add Thread Form -->
        <div class="w-full md:w-3/4">
            <!-- Thread List Section -->
            <div id="threadListSection">
                <!-- Search and Filter Options -->
                <div class="flex flex-col md:flex-row justify-between mb-6 gap-4">
                    <div class="w-full md:w-2/3">
                        <input type="text" id="searchInput" placeholder="Search threads..." class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
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
                <div class="thread-list space-y-4">
                    <!-- Thread 1 -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden thread-item" data-title="Tips for reducing plastic waste in everyday life">
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
                                <div class="flex items-center">
                                    <button class="delete-btn bg-red-600 hover:bg-red-700 text-white font-medium py-1 px-3 rounded text-xs" data-title="Tips for reducing plastic waste in everyday life">Delete</button>
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
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden thread-item" data-title="Solar panel installation: DIY or professional?">
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
                                <div class="flex items-center">
                                    <button class="delete-btn bg-red-600 hover:bg-red-700 text-white font-medium py-1 px-3 rounded text-xs" data-title="Solar panel installation: DIY or professional?">Delete</button>
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

            <!-- Add Thread Form (hidden by default) -->
            <div id="addThreadForm" class="hidden bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto mt-8">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Create New Thread</h2>
                <div class="space-y-4">
                    <div>
                        <label for="threadTitle" class="block text-sm font-medium text-gray-700">Thread Title</label>
                        <input type="text" id="threadTitle" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., Tips for reducing plastic waste">
                    </div>
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="category" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="Waste Management">Waste Management</option>
                            <option value="Renewable Energy">Renewable Energy</option>
                            <option value="Recycling">Recycling</option>
                            <option value="Sustainable Living">Sustainable Living</option>
                            <option value="Eco-friendly Products">Eco-friendly Products</option>
                        </select>
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., Share your strategies for minimizing waste..." rows="4"></textarea>
                    </div>
                    <div>
                        <label for="postedBy" class="block text-sm font-medium text-gray-700">Posted By</label>
                        <input type="text" id="postedBy" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g., EcoWarrior">
                    </div>
                    <div class="flex justify-end space-x-3">
                        <button id="cancelBtn" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-1 px-3 rounded text-sm">Cancel</button>
                        <button id="saveThreadBtn" class="bg-green-600 hover:bg-green-700 text-white font-medium py-1 px-3 rounded text-sm">Save Thread</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Thread Creation, Search, Category Sorting, and Dynamic Counts -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const createThreadBtn = document.getElementById('createThreadBtn');
        const threadListSection = document.getElementById('threadListSection');
        const addThreadForm = document.getElementById('addThreadForm');
        const saveThreadBtn = document.getElementById('saveThreadBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        const searchInput = document.getElementById('searchInput');
        const categoryItems = document.querySelectorAll('.category-item');
        let threadItems = document.querySelectorAll('.thread-list .thread-item');
        let selectedCategory = 'all';

        // Show Add Thread Form
        createThreadBtn.addEventListener('click', function () {
            threadListSection.classList.add('hidden');
            addThreadForm.classList.remove('hidden');
        });

        // Cancel button to return to thread list
        cancelBtn.addEventListener('click', function () {
            addThreadForm.classList.add('hidden');
            threadListSection.classList.remove('hidden');
            clearForm();
        });

        // Save thread and render it
        saveThreadBtn.addEventListener('click', function () {
            const thread = {
                title: document.getElementById('threadTitle').value,
                category: document.getElementById('category').value,
                description: document.getElementById('description').value,
                postedBy: document.getElementById('postedBy').value,
                replies: '0 replies',
                likes: '0 likes',
                time: 'Just now'
            };

            // Validate required fields
            if (!thread.title || !thread.category || !thread.description || !thread.postedBy) {
                alert('Please fill in all fields.');
                return;
            }

            // Save to localStorage
            const storedThreads = JSON.parse(localStorage.getItem('threads')) || [];
            storedThreads.push(thread);
            localStorage.setItem('threads', JSON.stringify(storedThreads));

            // Render the new thread
            renderThread(thread);

            // Switch back to thread list
            addThreadForm.classList.add('hidden');
            threadListSection.classList.remove('hidden');
            clearForm();

            // Update threadItems for filtering and counts
            threadItems = document.querySelectorAll('.thread-list .thread-item');
            updateCategoryCounts();
            filterThreads();
        });

        // Load threads from localStorage on page load
        let storedThreads = JSON.parse(localStorage.getItem('threads')) || [];
        storedThreads = storedThreads.filter(thread => {
            if (!thread || typeof thread !== 'object' || !thread.title || !thread.category) {
                console.warn('Skipping invalid thread:', thread);
                return false;
            }
            return true;
        });
        storedThreads.forEach(thread => renderThread(thread));
        localStorage.setItem('threads', JSON.stringify(storedThreads));

        // Update threadItems after loading stored threads
        threadItems = document.querySelectorAll('.thread-list .thread-item');
        updateCategoryCounts();

        // Function to render a new thread
        function renderThread(thread) {
            if (!thread || !thread.category) {
                console.warn('Invalid thread object, skipping render:', thread);
                return;
            }

            const threadItem = document.createElement('div');
            threadItem.className = 'bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden thread-item';
            threadItem.setAttribute('data-title', thread.title);
            threadItem.innerHTML = `
                <div class="p-6">
                    <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded inline-block mb-2">${thread.category}</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1">${thread.title}</h3>
                    <p class="text-sm text-gray-600 mb-3">Posted by ${thread.postedBy}</p>
                    <p class="text-gray-500 mb-4">${thread.description}</p>
                    <div class="flex items-center text-sm text-gray-500 gap-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                            <span>${thread.replies}</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                            </svg>
                            <span>${thread.likes}</span>
                        </div>
                        <div class="flex items-center">
                            <button class="delete-btn bg-red-600 hover:bg-red-700 text-white font-medium py-1 px-3 rounded text-xs" data-title="${thread.title}">Delete</button>
                        </div>
                        <div class="flex items-center ml-auto">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>${thread.time}</span>
                        </div>
                    </div>
                </div>
            `;
            document.querySelector('.thread-list').prepend(threadItem);
        }

        // Function to delete a thread
        function deleteThread(title) {
            let storedThreads = JSON.parse(localStorage.getItem('threads')) || [];
            storedThreads = storedThreads.filter(thread => thread.title !== title);
            localStorage.setItem('threads', JSON.stringify(storedThreads));
            const threadToRemove = Array.from(threadItems).find(thread => thread.querySelector('h3')?.textContent === title);
            if (threadToRemove) threadToRemove.remove();
            threadItems = document.querySelectorAll('.thread-list .thread-item');
            updateCategoryCounts();
            filterThreads();
        }

        // Add event listener for delete buttons
        document.querySelector('.thread-list').addEventListener('click', function (e) {
            if (e.target.classList.contains('delete-btn')) {
                const title = e.target.getAttribute('data-title');
                if (confirm(`Are you sure you want to delete "${title}"?`)) {
                    deleteThread(title);
                }
            }
        });

        // Function to clear the form
        function clearForm() {
            document.getElementById('threadTitle').value = '';
            document.getElementById('category').value = 'Waste Management';
            document.getElementById('description').value = '';
            document.getElementById('postedBy').value = '';
        }

        // Function to update category counts
        function updateCategoryCounts() {
            const counts = {
                'Waste Management': 0,
                'Renewable Energy': 0,
                'Recycling': 0,
                'Sustainable Living': 0,
                'Eco-friendly Products': 0
            };

            // Count threads per category
            threadItems.forEach(thread => {
                const category = thread.querySelector('div.bg-green-100').textContent;
                if (counts.hasOwnProperty(category)) {
                    counts[category]++;
                }
            });

            // Update counts in the sidebar
            categoryItems.forEach(item => {
                const category = item.getAttribute('data-category');
                const countElement = item.querySelector('.category-count');
                if (category === 'all') {
                    const totalCount = Object.values(counts).reduce((sum, count) => sum + count, 0);
                    countElement.textContent = totalCount;
                } else {
                    countElement.textContent = counts[category] || 0;
                }
            });
        }

        // Function to filter threads based on search and category
        function filterThreads() {
            const searchTerm = searchInput.value.toLowerCase().trim();

            threadItems.forEach(thread => {
                const title = thread.querySelector('h3').textContent.toLowerCase();
                const category = thread.querySelector('div.bg-green-100').textContent;

                // Check if thread matches the search term (title only)
                const matchesSearch = title.includes(searchTerm);
                
                // Check if thread matches the selected category
                const matchesCategory = selectedCategory === 'all' || category === selectedCategory;

                // Show thread only if it matches both search and category filters
                thread.style.display = (matchesSearch && matchesCategory) ? 'block' : 'none';
            });
        }

        // Search Functionality
        searchInput.addEventListener('input', filterThreads);

        // Category Sorting Functionality
        categoryItems.forEach(item => {
            item.addEventListener('click', function () {
                // Remove active class from all category items
                categoryItems.forEach(i => i.classList.remove('active'));
                // Add active class to clicked category
                this.classList.add('active');
                // Update selected category
                selectedCategory = this.getAttribute('data-category');
                // Apply filters
                filterThreads();
            });
        });

        // Set default active category (All Categories)
        document.querySelector('[data-category="all"]').classList.add('active');

        // Apply filters on page load
        filterThreads();
    });
</script>

<style>
    .category-item {
        cursor: pointer;
    }
    .category-item:hover span.text-gray-500 {
        color: #15803d; /* green-700 */
    }
    .category-item.active span.text-gray-500 {
        color: #15803d; /* green-700 */
        font-weight: 600;
    }
</style>
@endsection