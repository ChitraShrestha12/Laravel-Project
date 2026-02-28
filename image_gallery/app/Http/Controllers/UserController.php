<?php

namespace App\Http\Controllers;

use App\Models\image;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Home()
    {
        return view('home');
    }
    public function Gallary(){
        $images = image::get();
        return view('gallary',compact('images'));
    }
    public function ImageUpload(Request $req)
    {
        $req->validate([
            'image' => 'required|max:5000'
        ]);
        $path = $req->file('image')->store('image', 'public');
        image::create([
            'image_upload' => $path
        ]);
        return redirect()->route('home')->with('status','Successfully upload image');
    }
}
