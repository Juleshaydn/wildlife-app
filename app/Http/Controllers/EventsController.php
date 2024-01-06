<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Import your Event model

class EventsController extends Controller
{
    public function showEvents(Request $request) {
        $query = Event::query();

        // If a search term is provided, filter the events by name, description, or type
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('name', 'like', '%' . $searchTerm . '%')
                  ->orWhere('description', 'like', '%' . $searchTerm . '%')
                  ->orWhere('type', 'like', '%' . $searchTerm . '%');
            });
        }

        $events = $query->orderBy('date', 'asc')->get();

        return view('events', ['events' => $events]);
    }
}
