<?php

namespace App\Http\Controllers;

class InfoController extends Controller
{
    public function index()
    {
        return view('info'); // Returns resources/views/info.blade.php
    }
}

