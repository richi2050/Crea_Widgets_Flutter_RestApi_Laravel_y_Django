<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Chip;
use Illuminate\Http\Request;

class ChipController extends Controller
{
    public function index()
    {
        $chip = Chip::paginate(15);
        return response()->json($chip);
    }

    public function all()
    {
        $chip = Chip::get();
        return response()->json($chip);
    }
    
    public function show(Chip $chip){
        return response()->json($chip);
    }
}
