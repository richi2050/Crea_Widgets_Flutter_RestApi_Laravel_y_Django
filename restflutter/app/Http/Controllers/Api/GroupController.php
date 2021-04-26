<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $group = Group::paginate(15);
        return response()->json($group);
    }

    public function all()
    {
        $group = Group::get();
        return response()->json($group);
    }
    
    public function show(Group $group){
        return response()->json($group);
    }

}
