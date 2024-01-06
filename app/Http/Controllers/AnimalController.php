<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller {
    public function index() {
        $animals = Animal::all(['id', 'name', 'description', 'img']); // Fetch only the id, name, description and image
        return view('animals', compact('animals')); // Pass the animals to the view
    }
}
