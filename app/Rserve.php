<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rserve extends Model
{
    use HasFactory;
    public function patient(){
        //子から親はbelongsToで親
        return $this->belongsTo(Patient::class);
    }
}
