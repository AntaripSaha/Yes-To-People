<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $homes = Home::all();
        $about = About::first();
        return view('frontend.home', compact('about', 'homes'));
    }

}
