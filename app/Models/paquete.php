<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paquete extends Model
{
    use HasFactory;
    public function camionero(){
        return $this->belongsToMany('App\Models\camionero ');
    }
    public function provincia(){
        return $this->belongsToMany('App\Models\provincia ');
    }
}
