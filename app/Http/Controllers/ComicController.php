<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
    
        return view("comics.index", compact('comics'));

    }

       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();

    // dd($data);

        $new_c= new Comic();

        $new_c->title= $data['title'];
        $new_c->description= $data['description'];
        $new_c->thumb= $data['thumb'];
        $new_c->price= $data['price'];
        $new_c->series= $data['series'];
        $new_c->sale_date= $data['sale_date'];
        $new_c->type= $data['type'];

        $new_c->save();
        if (isset($data['checkbox']))
              return to_route('comics.create');
        else
             return to_route('comics.show', $new_c);
    }

 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data=$request->all();

        $comic->title= $data['title'];
        $comic->description= $data['description'];
        $comic->thumb= $data['thumb'];
        $comic->price= $data['price'];
        $comic->series= $data['series'];
        $comic->sale_date= $data['sale_date'];
        $comic->type= $data['type'];

        $comic->save();

        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}