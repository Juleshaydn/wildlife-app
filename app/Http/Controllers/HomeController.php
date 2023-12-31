<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Returns resources/views/home.blade.php
    }
}
