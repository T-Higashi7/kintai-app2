<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    //php の場合メソッド名は1文字目は小文字
    //メソッド名は1対1なら単数形、1対多なら複数形とする。
    public function address(){
        //1対1の関係　patientからaddressをみる。
        //1対多ならhasManyになる。
        return $this->hasOne(Address::class);
    }
    //phpの場合はfunction名は2文字目を大文字
    public function insuranceCard(){
        return $this->hasMany(insuranceCard::class);
    }
    public function gairai(){
        //0以上もhasManyで良い
        return $this->hasMany(Gairai::class);
    }
    public function reserve(){
        return $this->hasMany(Rserve::class);
    }
}
