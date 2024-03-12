<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    public $table='roles';
    protected $primaryKey='rol_id';
    protected $fillable = [ //: Indica qué campos pueden ser llenados
        'rol_descripcion',
    ];
    protected $casts =[ //Define la conversión de tipos de datos
        'rol_descripcion'=>'string',
    ];

}
