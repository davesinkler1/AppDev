<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utility;
use DB;
class UtilityController extends Controller
{
    public function create(){
            return view('addutility');
    }

    public function store(Request $request){

        $utility = new Utility;

        $utility->brand = $request->input('brand');
        $utility->name = $request->input('name');
        $utility->type = $request->input('type');
        $utility->area = $request->input('area');
        $utility->price = $request->input('price');
    
        $utility->imagepath = $request->file('image')->store('public/utility_image');
        $utility->imagename = $request->file('image')->hashName();

        //$utility->owner_id = Auth::id();

        $utility->save();

        return redirect('home/addutility')->with('status', 'Utility Successfully Added');

    }

    public function delete($delete){
        DB::table('utility')->where('id', $delete)->delete();
        return redirect('home/viewutility')->with('status', 'Utility Successfully Deleted');
    }

    public function rent(){
        $utility = Utility::find('id');
        $utility->isRent = true;
        $utility->save();
        return redirect('home')->with('status', 'Car Successfully Rent');
    }
}