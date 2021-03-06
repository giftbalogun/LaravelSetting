<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use Session;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = data::paginate(5);
        return view('index')->with('post',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array('title'=>'required|max:225'));

        $post = new data;
        $post->title=$request->title;

        $post->save();

        Session::flash('success', 'This is somehting which is successful');

        return redirect()->route('data.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = data::find($id);
        return view('show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = data::find($id);
        return view('edit')->with('post',$post);
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
        $this->validate($request,array('title'=>'required|max:225'));

        $post = data::find($id);

        $post->title=$request->input('title');
        $post->save();
        
        Session::flash('success', 'This is somehting which is successful');

        return redirect()->route('data.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = data::find($id);

        $post->delete();
        
        Session::flash('success', 'This is somehting which is successful');

        return route('data.index');
    }
}
