<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
public function update_profile(Request $request)
  {
    $name = $request->file('picture')->getClientOriginalName();
    $size = $request->file('picture')->getSize();
    $request->file('picture')->storeAs('public/images/profile/', $name);
    $photo = new Profile();
    $photo->name = $name;
    $photo->size = $size;
    $photo->save();
    return redirect() -> back();
  }

public function createImage() {
    $photos = Profile::all();
    return view('/profile', ['photos' => $photos]);
  }
}
