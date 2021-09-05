<?php

namespace App\Http\Controllers;

use App\Onomatopoeia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OnomatopoeiaController extends Controller
{

 public function result(Request $request, Onomatopoeia $onomatopoeia)
 {
    $input = $request['onomatopoeia'];
    $input_name = array_values($input);
    $onomatopoeia_name = DB::table('onomatopoeias')->where('name', '=', $input)->pluck('id');
    $technique_name = Onomatopoeia::find($onomatopoeia_name[0])->technique->name;
    return view('result')->with([
     "technique_name" => $technique_name,
     "input_name" => $input_name[0],
    ]);
 }
 
 public function store(Request $request, Onomatopoeia $onomatopoeia)
{
    $input = $request['onomatopoeia'];
    $onomatopoeia->fill($input)->save();
    return view('index');
}

}
