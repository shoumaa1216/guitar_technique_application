<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onomatopoeia extends Model
{
    public function technique()
    {
        return $this->belongsTo(Technique::class);
    }
}
