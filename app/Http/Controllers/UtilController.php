<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utility;
use Illuminate\Support\Facades\Auth;

class UtilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utility = Utility::all();
        return view ('utilityindex')->with('utility', $utility);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addutility');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        $utility = Utility::create($requestData);
        return view('utilityoverview', ['utility'=> $utility]);
    }

    public function confirm()
    {
        return redirect('utility')->with('flash_message', 'Utility Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utilData = Utility::where('id', $id)->get();
        return view('editUtil', ['util'=>$utilData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $brand = $request->input('brand');
        $name = $request->input('name');
        $type = $request->input('type');
        $area = $request->input('area');
        $price = $request->input('price');

        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $photo = '/storage/'.$path;

        Utility::where('id', $id)->update(['brand'=>$brand, 'name'=>$name, 'type'=>$type, 'area'=>$area, 'price'=>$price, 'photo'=>$photo]);

        return redirect('utility')->with('flash_message', 'Utility Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Utility::where('id', $id)->delete();
        return redirect('utility')->with('flash_message', 'Utility Deleted!');
    }
}
