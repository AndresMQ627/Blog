<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categria extends Model

{
    protected $table="categorias";
    protected $fillable = [
        'nombre',
        'img'
    ];
}
