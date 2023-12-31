<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller {
    public function index() {
        $animals = Animal::all(['id', 'name']); // Fetch only the id and name
        return view('animals', compact('animals')); // Pass the animals to the view
    }
}
