<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Import your Event model

class EventsController extends Controller
{
    public function showEvents(Request $request) {
        $query = Event::query();

        // If a search term is provided, filter the events
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $events = $query->orderBy('date', 'asc')->get();

        return view('events', ['events' => $events]);
    }
}
