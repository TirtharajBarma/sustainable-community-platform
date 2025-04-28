@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="py-10 md:py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 md:px-6 grid gap-6 md:grid-cols-2 md:gap-12 items-center">
            <div class="flex flex-col gap-4">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight text-[#4D7C0F]">
                    Building a Sustainable Future Together
                </h1>
                <p class="text-base md:text-lg text-gray-500">
                    Join our community of environmentally conscious individuals working together to create a more sustainable world through knowledge sharing, collaboration, and local action.
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="{{ url('/login') }}" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-white bg-[#5D8726] hover:bg-green-700 py-2 px-4">
                        Join the Community
                    </a>
                    <a href="#" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-100 py-2 px-4">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="https://images.unsplash.com/photo-1500673922987-e212871fec22" alt="Sustainable forest landscape" class="w-full h-auto object-cover">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 md:px-6 text-center mb-10">
            <h2 class="text-3xl font-bold mb-4">How SustainaConnect Works</h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-base">
                Our platform brings together like-minded individuals to share knowledge, collaborate on projects, and organize events that make a real impact.
            </p>
        </div>
        <div class="max-w-7xl mx-auto px-4 md:px-6 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            <div class="rounded-lg border bg-white shadow-sm p-6 text-center">
                <div class="flex flex-col items-center gap-4">
                    <div class="p-3 rounded-full bg-green-100 text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Forums</h3>
                    <p class="text-gray-500 text-sm">
                        Engage in meaningful discussions about sustainability with our global community.
                    </p>
                    <a href="{{ url('/forums') }}" class="text-[#14A248] hover:underline text-sm">
                        Join Discussions
                    </a>
                </div>
            </div>
            <div class="rounded-lg border bg-white shadow-sm p-6 text-center">
                <div class="flex flex-col items-center gap-4">
                    <div class="p-3 rounded-full bg-green-100 text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Resources</h3>
                    <p class="text-gray-500 text-sm">
                        Access and share valuable guides, articles, and videos on sustainable living.
                    </p>
                    <a href="{{ url('/resources') }}" class="text-[#14A248] hover:underline text-sm">
                        Browse Resources
                    </a>
                </div>
            </div>
            <div class="rounded-lg border bg-white shadow-sm p-6 text-center">
                <div class="flex flex-col items-center gap-4">
                    <div class="p-3 rounded-full bg-green-100 text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                            <path d="M13 8c0-2.76-2.46-5-5.5-5S2 5.24 2 8h2l1-1 1 1h4"></path>
                            <path d="M13 7.14A5.82 5.82 0 0 1 16.5 6c3.04 0 5.5 2.24 5.5 5h-3l-1-1-1 1h-3"></path>
                            <path d="M5.89 9.71c-2.15 2.15-2.3 5.47-.35 7.43l4.24-4.25.7-.7.71-.71 2.12-2.12c-1.95-1.96-5.27-1.8-7.42.35z"></path>
                            <path d="M11.1 15.7c1.5-.7 2.4-2.1 2.4-3.7"></path>
                            <path d="M12.5 21V16"></path>
                            <path d="M10 21V16"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Projects</h3>
                    <p class="text-gray-500 text-sm">
                        Collaborate on local and global sustainability initiatives that make a difference.
                    </p>
                    <a href="{{ url('/projects') }}" class="text-[#14A248] hover:underline text-sm">
                        Explore Projects
                    </a>
                </div>
            </div>
            <div class="rounded-lg border bg-white shadow-sm p-6 text-center">
                <div class="flex flex-col items-center gap-4">
                    <div class="p-3 rounded-full bg-green-100 text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Events</h3>
                    <p class="text-gray-500 text-sm">
                        Discover workshops, webinars, and meetups focused on environmental awareness.
                    </p>
                    <a href="{{ url('/events') }}" class="text-[#14A248] hover:underline text-sm">
                        Find Events
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="py-12 md:py-16 rounded-lg p-4 md:p-8" style="background: linear-gradient(to right, #E6F4EA, #E6F0FA);">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold mb-4">Our Community Impact</h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-base">
                Together, our members are creating measurable change for a more sustainable future.
            </p>
        </div>
        <div class="grid gap-4 md:grid-cols-3 max-w-7xl mx-auto px-4 md:px-6">
            <div class="flex flex-col items-center p-4 text-center">
                <span class="text-4xl font-bold text-[#4D7C0F]">5,280</span>
                <p class="text-sm text-gray-500">Trees Planted</p>
            </div>
            <div class="flex flex-col items-center p-4 text-center">
                <span class="text-4xl font-bold text-[#4D7C0F]">12.4 tons</span>
                <p class="text-sm text-gray-500">CO₂ Emissions Reduced</p>
            </div>
            <div class="flex flex-col items-center p-4 text-center">
                <span class="text-4xl font-bold text-[#4D7C0F]">8,430</span>
                <p class="text-sm text-gray-500">Community Members</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-10 md:py-16 bg-[#4D7C0F] rounded-lg p-4 md:p-8 text-center mt-15">
        <div>
            <h2 class="text-3xl font-bold mb-4 text-white">Ready to Make a Difference?</h2>
            <p class="max-w-2xl mx-auto mb-8 text-white text-base">
                Join our growing community of environmental advocates and start contributing to a sustainable future today.
            </p>
            <a href="{{ url('/login') }}" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium text-green-700 bg-white hover:bg-gray-100 py-2 px-4">
                Join SustainaConnect
            </a>
        </div>
    </section>
@endsection