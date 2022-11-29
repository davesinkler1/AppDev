<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
 
  public function store(Request $request)
  {
    $name = $request->file('picture')->getClientOriginalName();
    $size = $request->file('picture')->getSize();
    $request->file('picture')->storeAs('public/images/profile/', $name);
    $photo = new Profile();
    $photo->name = $name;
    $photo->size = $size;
    $photo->save();
    return redirect() -> back();
    //dd($request);
  }

  public function create() {
    //$photo = Profile::all();
    return view('/upload');
  }

  /*public function show() {
    $get = DB::table('select name from profiles');
    //$get = Profile::all();
    //$get = DB::table('profiles')->find(1);
    //$get = $get->get();

    return view('profile', ['photos' => $get]);
 }*/
}
