<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveText;
use App\Models\Group;
use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texts = Text::paginate(15);
        return view('dashboard.widgets.text.index',compact('texts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::pluck('id','name');
        $text = new Text();
        return view('dashboard.widgets.text.create',compact('groups','text'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveText $request)
    {
        Text::create($request->validated());
        return back()->with('status','Elemento creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function show(Text $text)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function edit(Text $text)
    {
        $groups = Group::pluck('id','name');
        return view('dashboard.widgets.text.edit',compact('groups','text'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function update(SaveText $request, Text $text)
    {
        $text->update($request->validated());
        return back()->with('status','Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function destroy(Text $text)
    {
        $text->delete();
        return back()->with('status','Eliminado con éxito');
    }
}
