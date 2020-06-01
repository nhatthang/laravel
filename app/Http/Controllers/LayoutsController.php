<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    function admin(){
        return view('layouts.index');
    }
}
