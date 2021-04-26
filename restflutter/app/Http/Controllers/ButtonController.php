<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveButton;
use Illuminate\Http\Request;

use App\Models\Group;
use App\Models\Button;
class ButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buttons = Button::paginate(15);
        return view('dashboard.widgets.button.index',compact('buttons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::pluck('id', 'name');
   
        $button = new Button();
        
        return view('dashboard.widgets.button.create',compact('groups','button'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveButton $request)
    {
        Button::create($request->validated());
        return back()->with('status','Elemento creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function show(Button $button)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function edit(Button $button)
    {
        $groups = Group::pluck('id','name');
        return view('dashboard.widgets.button.edit',compact('groups','button'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function update(SaveButton $request, Button $button)
    {
        $button->update($request->validated());
        return back()->with('status','Elemento se ha actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function destroy(Button $button)
    {
        $button->delete();
        return back()->with('status','Eliminado con éxito');
    }
}
