<?php

namespace App\Http\Controllers;

use App\Box;
use Illuminate\Http\Request;

class BoxesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boxes = Box::all();
        return view('boxes.index',compact('boxes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boxes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'box_open' => 'required',
            'box_close' => 'required'
        ]);
        Box::create($data);
        return redirect('/boxes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $box = Box::where('name', $slug)->firstOrFail();
        $boxes = Box::all();
        return view('boxes.show', compact('box','boxes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $box = Box::where('name', $slug)->firstOrFail();
        return view('boxes.edit',compact('box'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Box $box)
    {
        $data = request()->validate([
            'name' => 'required',
            'box_open' => 'required',
            'box_close' => 'required'
        ]);
        $box->update($data);
        return redirect('/boxes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function destroy(Box $box)
    {
        $box->delete();
        return redirect('/boxes');
    }
}
