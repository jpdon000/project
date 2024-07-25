<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JpController extends Controller
{
    public function index()
    {
        return view('table');
    }
}

