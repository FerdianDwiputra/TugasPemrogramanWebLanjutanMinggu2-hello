<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        // Bagian 2
        // return "Hello World dari Controller!";

        // Bagian 3
        return view('hello');
    }
}
