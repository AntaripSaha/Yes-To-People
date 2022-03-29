<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\About;
use App\Models\Mission;
use App\Models\Privacy;
use App\Models\Term;

class HomePageController extends Controller
{
    public function info(){
        return view('admin.info');
    }
    //Home Section Start 
    public function home(){
        $homes = Home::all();
        return view('admin.home', compact('homes'));
    }
    public function store(Request $req){
        $file_upload = new Home;
        $file_upload->title = $req->title;
        $file_upload->sub_title = $req->sub_title;
        if($req->file('img')){
            $file = $req->file('img');
            Storage::putFile('public/home/image', $file);
            $file_upload->image =  "storage/home/image/" . $file->hashName();
        }
        if($file_upload->save()){
            return redirect()->back()->with('success', 'Successfully Saved Data');
        }
    }
    public function delete($id){
        Home::find($id)->delete();
        return redirect()->back()->with('danger', 'Data Deleted');
    }
    //Home Section End 

    //About Section Start 
    public function about(){
        $about = About::All();
        return view('admin.about', compact('about'));
    }
    public function about_store(Request $req){

        $about = About::first();
        $about->description = $req->description;
        if($req->file('img')){
            $file = $req->file('img');
            $file->storeAs('public/about/image/','about_img.'.$file->getClientOriginalExtension());
            $about->img =  'storage/about/image/about_img.'.$file->getClientOriginalExtension();
        }
        if($about->save()){
            return redirect()->back()->with('success', 'Successfully Saved Data');
        }
    }
    //About Section End 

    //Description Section Start 
    public function description(){
        $mission = Mission::first();
        $privacy = Privacy::first();
        $term =Term::first();
        $about = About::All();
        return view('admin.description', compact('about','mission', 'privacy', 'term'));
    }
    public function mission_store(Request $req){
        $mission = Mission::first();
        $mission->description = $req->mission;
        if($mission->save()){
            return redirect()->back()->with('success', 'Data Saved Successfully');
        }
    }
    public function privacy_store(Request $req){
        $privacy = Privacy::first();
        $privacy->description = $req->privacy;
        if($privacy->save()){
            return redirect()->back()->with('success', 'Data Saved Successfully');
        }
    }
    public function terms_store(Request $req){
        $terms =Term::first();
        $terms->description = $req->terms;
        if($terms->save()){
            return redirect()->back()->with('success', 'Data Saved Successfully');
        }
    }
    //About Section End 
}
