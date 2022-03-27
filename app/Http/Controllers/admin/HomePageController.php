<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function info(){
        return view('admin.info');
    }
    public function home(Request $req){
        return view('admin.home');
    }
    public function about(){
        
    }
}
