<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casts = Cast::all();
        return view('admin/cast/show', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/cast/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'cast_poster' =>'required',
            'bio'=>'required',
            'birth_date'=>'required',
            'list_of_movies'=>'required',
        ]);
        if($request->hasFile('cast_poster')){
            $imageName ="/img/".$request->cast_poster->getClientOriginalName();
        }
        $casts = new Cast();
        $casts->name= $request->name;
        $casts->cast_poster= $imageName;
        $casts->bio = $request->bio;
        $casts->birth_date = $request->birth_date;
        $casts->list_of_movies= $request->list_of_movies;

        $casts->save();

        return redirect(route('cast.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cast = Cast::where('id',$id)->first();
        return view('admin/cast/edit',compact('cast'));
        return redirect('admin/home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'cast_poster' =>'required',
            'bio'=>'required',
            'birth_date'=>'required',
            'list_of_movies'=>'required',
        ]);
        if($request->hasFile('cast_poster')){
            $imageName ="/img/".$request->cast_poster->getClientOriginalName();
        }
        $casts = Cast::find($id);
        $casts->name= $request->name;
        $casts->cast_poster= $imageName;
        $casts->bio = $request->bio;
        $casts->birth_date = $request->birth_date;
        $casts->list_of_movies= $request->list_of_movies;

        $casts->save();

        return redirect(route('cast.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cast::where('id',$id)->delete();
        return redirect()->back();
    }
}
