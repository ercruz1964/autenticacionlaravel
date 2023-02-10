<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombreSexo'
    ];

    
    public function users(){
        return $this->hasMany('App\Models\User');
    }
}
