<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlVistas extends Controller
{
    public function vistaInicio()
    {
        return view('inicio');
    }
}
