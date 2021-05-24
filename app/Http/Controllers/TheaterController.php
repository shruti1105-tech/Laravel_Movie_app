<?php

namespace App\Http\Controllers;

use App\Models\Theater;
use Illuminate\Http\Request;

class TheaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theaters = Theater::all();
        return view('admin/Theater/show',compact('theaters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/Theater/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'  => 'required',
            'city' => 'required',
            'ratting' =>'required',
        ]);

        $theater=new Theater;
        $theater->theatre_name = $request->name;
        $theater->city_name = $request->city;
        $theater->rate= $request->ratting;
        $theater->save();

        return redirect(route('theater.index'));
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
        $theater=Theater::where('id',$id)->first();
        return view('admin/Theater/edit',compact('theater'));
        return redirect('admin/home');
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
        $this->validate($request,[
            'name'  => 'required',
            'city' => 'required',
            'ratting' =>'required',
        ]);

        $theater=Theater::find($id);
        $theater->theatre_name = $request->name;
        $theater->city_name = $request->city;
        $theater->rate= $request->ratting;
        $theater->save();

        return redirect(route('theater.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Theater::where('id',$id)->delete();
        return redirect()->back();
    }
}
