<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Explanation extends Model
{
   public function technique()
    {
        return $this->belongsTo(Technique::class);
    }
}
