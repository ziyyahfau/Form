<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class AboutController extends Controller
{
     public function index()
    {
        
        return view('dashboard.about');
    }
}