<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    public function store(Request $req){
        return $req;
    }
}
