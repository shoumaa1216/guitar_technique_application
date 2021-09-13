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

public function post(Technique $technique, Request $request)
{
    $onomatopoeias = Technique::find($technique->id)->onomatopoeias;
    return view('post')->with(["technique_name" => $technique->name,
                               "onomatopoeias" => $onomatopoeias,
                               "technique_id" => $technique->id,
    ]);
}

public function list(Technique $technique)
{
    return view('list')->with(['techniques' => $technique->get()]);  
}


}
