<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Button;
use App\Models\Group;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class ButtonController extends Controller
{
    public function index()
    {
        $buttons = Button::paginate(15);
        return response()->json($buttons);
    }

    public function all()
    {
        $buttons = Button::get();
        return response()->json($buttons);
    }
    
    public function show(Button $button){
        return response()->json($button);
    }

    public function group(Group $group){
        $group = Button::where('group_id', $group->id)->get();
        return response()->json($group);
    }
}
