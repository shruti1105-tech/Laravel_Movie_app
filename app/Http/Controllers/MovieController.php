<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies =Movie::all();
        return view('admin/Movies/show',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/Movies/create');
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
            'title'  => 'required',
            'release_year' => 'required',
            'poster' =>'required',
        ]);
        if($request->hasFile('poster')){
            $imageName ="/img/".$request->poster->getClientOriginalName();
        }

        $movie=new Movie;
        $movie->title = $request->title;
        $movie->release_year = $request->release_year;
        $movie->poster= $imageName;
        $movie->save();

        return redirect(route('movie.index'));
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
        $movie=Movie::where('id',$id)->first();
        return view('admin/Movies/edit',compact('movie'));
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
            'title'  => 'required',
            'release_year' => 'required',
            'poster' =>'required',
        ]);
        if($request->hasFile('poster')){
            $imageName ="/img/".$request->poster->getClientOriginalName();
        }

        $movie=Movie::find($id);
        $movie->title = $request->title;
        $movie->release_year = $request->release_year;
        $movie->poster= $imageName;
        $movie->save();

        return redirect(route('movie.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::where('id',$id)->delete();
        return redirect()->back();
    }
}
