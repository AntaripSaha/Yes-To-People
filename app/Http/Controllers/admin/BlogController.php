<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
       
    // Blog Section Start 
    public function blog(){
        $blogs = Blog::orderBy('id', 'desc')->paginate(5);
        return view('admin.blog.blog', compact('blogs'));
    }
    public function blog_store(Request $req){
        $file_upload = new Blog;
        $file_upload->title = $req->title;
        $file_upload->description = $req->description;
        if($req->file('img')){
            $file = $req->file('img');
            Storage::putFile('public/service/image', $file);
            $file_upload->image =  "storage/service/image/" . $file->hashName();
        }
        if($file_upload->save()){
            return redirect()->back()->with('success', 'Successfully Saved Data');
        }
    }
    public function blog_view($id){
        $blog = Blog::find($id);
        return view('admin.blog.blog_details', compact('blog'));
    }
    public function blog_update($id, Request $req){
        $service = Blog::find($id);
        $service->title = $req->title;
        $service->description = $req->description;
        if($req->file('image')){
            $file = $req->file('image');
            Storage::putFile('public/service/image', $file);
            $service->image =  "storage/service/image/" . $file->hashName();
        }else{
            $service->image = $req->previous_image;
        }
        if($service->save()){
            return redirect()->back()->with('success', 'Successfully Saved Data');
        }
    }
    public function blog_delete($id){
        Blog::find($id)->delete();
        return redirect()->back()->with('danger', 'Data Deleted');
    }
    //Blog Section End 
    
}
