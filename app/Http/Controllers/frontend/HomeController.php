<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Contact;
use App\Models\Mission;
use App\Models\Privacy;
use App\Models\Service;
use App\Models\Term;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(){
        $homes = Home::all();
        $about = About::first();
        $contact = Contact::all();
        $mission = Mission::all();
        $privacy = Privacy::all();
        $services = Service::all();
        $term = Term::all();
        $blogs = Blog::all();
        return view('frontend.home', compact('about', 'homes', 'contact',
         'mission', 'privacy', 'services', 'term', 'blogs'
        ));
    }
    public function about(){
        $about = About::first();
        $blogs = Blog::all();    
        return view('frontend.about', compact('about', 'blogs'));
    }
    public function blog(){
        $blogs = Blog::All();
        return view('frontend.blog.blog', compact('blogs'));
    }
}
