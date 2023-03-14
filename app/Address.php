<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public function patient(){
        //1対1の関係　patientからaddressをみる。
        //子から親はbelongsToで親
        return $this->belongsTo(Patient::class);
    }
}
