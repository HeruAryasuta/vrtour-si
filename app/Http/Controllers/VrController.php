<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VrController extends Controller
{
    public function vr()
    {
        return view('vr', [
            "title" => "Virtual Reality Tour",
            
        ]);
    }
}
