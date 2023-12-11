<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model{

    //Fillable: Campos que queremos insertar masivamente en la BBDD, si no salta error
    //protected $fillable = [ Campos que queremos proteger ];

    //Guarded: Quedamos desprotegidos y dependemos del controlador para validar campos
    //          y enviarlos.
    
    protected $guarded = [];

    public function getRouteKeyName(){
        return 'url';
    }
}
