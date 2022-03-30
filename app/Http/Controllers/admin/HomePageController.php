<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\About;
use App\Models\Contact;
use App\Models\Mission;
use App\Models\Privacy;
use App\Models\Term;

class HomePageController extends Controller
{
    // Information Segment Start
    public function info(){
        $contact = Contact::first();
        return view('admin.info', compact('contact'));
    }
    public function info_store(Request $req){
        $contact = Contact::first();
        $contact->facebook = $req->facebook;
        $contact->twitter = $req->twitter;
        $contact->linkedin = $req->linkedin;
        $contact->pinterest = $req->pinterest;
        $contact->instagram = $req->instagram;
        $contact->name = $req->name;
        $contact->title = $req->title;
        $contact->description = $req->description;
        $contact->email = $req->email;
        $contact->phone = $req->phone;
        $contact->tel = $req->tel;
        if($req->file('logo_dark')){
            $logo_dark = $req->file('logo_dark');
            $logo_dark->storeAs('public/info/logo/','logo_dark.'.$logo_dark->getClientOriginalExtension());
            $contact->logo_dark = 'storage/info/logo/logo_dark.'.$logo_dark->getClientOriginalExtension();
        }
        if($req->file('logo_white')){
            $logo_white = $req->file('logo_white');
            $logo_white->storeAs('public/info/logo/','logo_white.'.$logo_white->getClientOriginalExtension());
            $contact->logo_white = 'storage/info/logo/logo_white.'.$logo_white->getClientOriginalExtension();
        }
        if($contact->save()){
            return redirect()->back()->with('success', 'Successfully Saved Data');
        }
    }
    // Information Segment End

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
    //Home Section Start 
    public function service(){
        $homes = Home::all();
        return view('admin.home', compact('homes'));
    }
    public function service_store(Request $req){
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
    public function service_delete($id){
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
