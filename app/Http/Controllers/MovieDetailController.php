<?php

namespace App\Http\Controllers;

use App\Models\MovieDetails;
use Illuminate\Http\Request;

class MovieDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie_details=MovieDetails::all();
        return view('admin/Movie_Details/show',compact('movie_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/Movie_Details/create');
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
            'overview' =>'required',
            'release_year' => 'required',
            'runtime' =>'required',
            'poster' =>'required',
            'cast' =>'required',
        ]);
        if($request->hasFile('poster')){
            $imageName = $request->poster->store('public');
        }
        $movie = new MovieDetails();
        $movie->title = $request->title;
        $movie->overview = $request->overview;
        $movie->runtime = $request->runtime;
        $movie->release_year = $request->release_year;
        $movie->poster= $imageName;
        $movie->cast  = $request->cast;
        $movie->save();

        return redirect(route('movie_detail.index'));
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
        $movie=MovieDetails::where('id',$id)->first();
        return view('admin/Movie_Details/edit',compact('movie'));
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
            'overview' =>'required',
            'release_year' => 'required',
            'runtime' =>'required',
            'poster' =>'required',
            'cast' =>'required',
        ]);
        if($request->hasFile('poster')){
            $imageName = $request->poster->store('public');
        }
        $movie = MovieDetails::find($id);
        $movie->title = $request->title;
        $movie->release_year = $request->release_year;
        $movie->poster= $imageName;
        $movie->save();

        return redirect(route('movie_detail.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MovieDetails::where('id',$id)->delete();
        return redirect()->back();
    }
}
