<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $image = Image::paginate(15);
        return response()->json($image);
    }

    public function all()
    {
        $image = Image::get();
        return response()->json($image);
    }
    
    public function show(Image $image){
        return response()->json($image);
    }
}
