<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageViewController extends Controller
{
    function img($img)
    {
        return redirect("img/" . $img);
//        return view('image',['img' => $img]);
    }
}
