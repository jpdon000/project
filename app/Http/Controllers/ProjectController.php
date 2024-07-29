<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProjectController extends Controller
{
    public function index()
    {
        $jps = User::all();
        return view('project',compact('jps'));
    } 
}
