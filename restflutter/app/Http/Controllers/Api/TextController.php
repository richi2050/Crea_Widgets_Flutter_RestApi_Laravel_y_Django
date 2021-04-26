<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index()
    {
        $text = Text::paginate(15);
        return response()->json($text);
    }

    public function all()
    {
        $text = Text::get();
        return response()->json($text);
    }
    
    public function show(Text $text){
        return response()->json($text);
    }
}
