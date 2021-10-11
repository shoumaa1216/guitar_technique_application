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
    $technique_url = Onomatopoeia::find($onomatopoeia_name[0])->technique->url;
    return view('result')->with([
     "technique_name" => $technique_name,
     "input_name" => $input_name[0],
     "explanation" => $explanation,
     "technique_url" => $technique_url,
    ]);
}
 }

 public function store(Request $request, Onomatopoeia $onomatopoeia)
{
    $input = $request['onomatopoeia'];
    $onomatopoeia->fill($input)->save();
    return view('store');
}
public function detail(Onomatopoeia $onomatopoeia, Technique $technique, Explanation $explanation)
{
    $onomatopoeias = Technique::find($technique->id)->onomatopoeias;
    $explanation =  Technique::find($technique->id)->explanations[0]->explanation;
    $technique_url = DB::table('techniques')->where('id', '=', $technique->id)->pluck('url');
    return view('detail')->with([
    "technique_name" => $technique->name,
     "onomatopoeias" => $onomatopoeias,
     "explanation" => $explanation,
     "technique_url" => $technique_url,
    ]);  
}

}
