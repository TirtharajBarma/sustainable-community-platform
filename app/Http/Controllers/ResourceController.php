<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function show($id)
    {
        // Simulated data (replace with database query in a real application)
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

        // Find the resource by ID
        $resource = $resources[$id] ?? null;

        // If resource not found, return 404
        if (!$resource) {
            abort(404, 'Resource not found');
        }

        // Pass the resource data to the view
        return view('resource-detail', compact('resource'));
    }
}