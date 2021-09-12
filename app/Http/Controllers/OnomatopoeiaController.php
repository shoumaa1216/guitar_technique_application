<?php

namespace App\Http\Controllers;

use App\Technique;
use App\Onomatopoeia;
use App\Explanation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\OnomatopoeiaRequest;

class OnomatopoeiaController extends Controller
{

 public function result(OnomatopoeiaRequest $request, Onomatopoeia $onomatopoeia, Technique $technique, Explanation $explanation)
 {
    $input = $request['onomatopoeia'];
    $input_name = array_values($input);
    $onomatopoeia_name = DB::table('onomatopoeias')->where('name', '=', $input)->pluck('id');
    if (empty($onomatopoeia_name[0])){
        return view('failure')->with([
            "input" => $input_name[0],
            'techniques' => $technique->get(),
             ]);
    }else{
    $technique = Onomatopoeia::find($onomatopoeia_name[0])->technique->id;
    $technique_name = Onomatopoeia::find($onomatopoeia_name[0])->technique->name;
    $explanation =  Technique::find($technique)->explanations[0]->explanation;
    return view('result')->with([
     "technique_name" => $technique_name,
     "input_name" => $input_name[0],
     "explanation" => $explanation,
    ]);
}
 }

 public function store(Request $request, Onomatopoeia $onomatopoeia)
{
    $input = $request['onomatopoeia'];
    $onomatopoeia->fill($input)->save();
    return view('index');
}
public function detail(Onomatopoeia $onomatopoeia, Technique $technique)
{
    return view('detail')->with(["onomatopoeia_name" => $onomatopoeia->get()
    ]);  
}

}
