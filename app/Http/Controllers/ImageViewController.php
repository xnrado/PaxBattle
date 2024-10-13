<?php

namespace App\Http\Controllers;

class ImageViewController extends Controller
{
    function img($img)
    {
        return redirect("storage/img/" . $img);
    }
}
