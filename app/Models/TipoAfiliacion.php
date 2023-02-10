<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAfiliacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipoAfiliacion'
    ];

    public function users(){
        return $this->hasMany('App\Models\Paciente'); 
    }
}
