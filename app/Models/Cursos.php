<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    protected $primaryKey='cur_id';
    public $table='cursos';

    public $fillable = [ //: Indica qué campos pueden ser llenados
        'cur_titulo',
        'cur_descripcion',
        'cur_grupo',
        'cur_estado'
    ];

    protected $casts =[ //Define la conversión de tipos de datos
        'cur_titulo'=>'string',
        'cur_descripcion'=>'string',
        'cur_grupo'=>'string',
        'cur_estado'=>'string'
    ];
    protected static array $rules =[ //Define un conjunto de reglas de validación para los atributos del modelo
        'cur_titulo'=>'required|string',
        'cur_descripcion'=>'required|string',
        'cur_grupo'=>'required|string',
    ];
}
