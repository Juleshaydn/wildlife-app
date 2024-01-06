<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller {
    public function index() {
        $events = Events::all(['id', 'name']); // Fetch only the id and name
        return view('events', compact('events')); // Pass the animals to the view
    }
    
}




