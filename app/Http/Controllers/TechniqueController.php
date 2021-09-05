<?php

namespace App\Http\Controllers;

use App\Technique;
use Illuminate\Http\Request;

class TechniqueController extends Controller
{
    public function index()
{
    return view('index');
}

    public function register(Technique $technique)
{
    return view('register')->with(['techniques' => $technique->get()]);
}

public function post(Technique $technique)
{
    return view('post')->with(["technique_name" => $technique->name]);
}

public function list(Technique $technique)
{
    return view('list')->with(['techniques' => $technique->get()]);  
}



}
