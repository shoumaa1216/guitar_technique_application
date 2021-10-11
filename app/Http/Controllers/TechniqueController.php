<?php

namespace App\Http\Controllers;

use App\Technique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechniqueController extends Controller
{
    public function index()
{
    return view('index');
}

    public function registers(Technique $technique)
{
    return view('registers')->with(['techniques' => $technique->get()]);
}

public function post(Technique $technique, Request $request)
{
    $onomatopoeias = Technique::find($technique->id)->onomatopoeias;
    $technique_url = DB::table('techniques')->where('id', '=', $technique->id)->pluck('url');
    return view('post')->with(["technique_name" => $technique->name,
                               "onomatopoeias" => $onomatopoeias,
                               "technique_id" => $technique->id,
                               "technique_url" => $technique_url,
    ]);
}

public function list(Technique $technique)
{
    return view('list')->with(['techniques' => $technique->get()]);  
}


}
