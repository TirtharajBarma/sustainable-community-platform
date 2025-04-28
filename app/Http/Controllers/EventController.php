<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        // Load events from local storage (JSON file)
        $events = [];
        if (Storage::exists('events.json')) {
            $events = json_decode(Storage::get('events.json'), true);
        }
        return view('events', compact('events'));
    }

    public function create()
    {
        return view('create-event');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:Workshop,Panel,Webinar,Class,Festival',
            'format' => 'required|in:In-Person,Online,Hybrid',
            'date' => 'required|date',
            'duration' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'total_spots' => 'required|integer',
            'image' => 'image|max:2048',
        ]);

        // Load existing events
        $events = [];
        if (Storage::exists('events.json')) {
            $events = json_decode(Storage::get('events.json'), true);
        }

        // Handle the image upload
        $imageUrl = 'https://via.placeholder.com/300x200'; // Default placeholder
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
            $imageUrl = Storage::url($imagePath);
        }

        // Create the new event
        $newEvent = [
            'title' => $request->title,
            'type' => $request->type,
            'format' => $request->format,
            'date' => $request->date,
            'duration' => $request->duration,
            'location' => $request->location,
            'description' => $request->description,
            'spots_filled' => 0,
            'total_spots' => $request->total_spots,
            'organizer' => 'User Created', // You can customize this
            'image_url' => $imageUrl,
        ];

        // Add the new event to the array
        $events[] = $newEvent;

        // Save the updated events back to the JSON file
        Storage::put('events.json', json_encode($events, JSON_PRETTY_PRINT));

        return redirect()->route('events.index')->with('success', 'Event created successfully!');
    }
}