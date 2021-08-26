<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
     public function index(Technique $technique)
    {
        return view('index')->with(['techniques' => $technique->get()]);  
    }
}
