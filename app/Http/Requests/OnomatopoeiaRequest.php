<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnomatopoeiaRequest extends FormRequest
{
   

    
    public function rules()
    {
        return [
             'onomatopoeia.name' => 'required|string|max:100',
        ];
    }
}
