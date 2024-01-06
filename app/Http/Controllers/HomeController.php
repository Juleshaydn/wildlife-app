<?php

namespace App\Http\Controllers;
use App\Models\Animal;
use App\Models\Event;

class HomeController extends Controller
{

    public function index() {
        $randomAnimals = Animal::inRandomOrder()->take(3)->get();
        $upcomingEvents = Event::orderBy('date', 'asc')->take(3)->get();
    
        return view('home', [
            'randomAnimals' => $randomAnimals,
            'upcomingEvents' => $upcomingEvents
        ]);
    }
    
}
