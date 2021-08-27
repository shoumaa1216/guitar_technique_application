<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
   public function onomatopoeias()
    {
        return $this->hasMany(Onomatopoeia::class);
    }
}
