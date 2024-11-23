<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $table = 'documentos'; 

    protected $fillable = [
        'usuario_id',
        'ruta_archivo',
        'nombre_archivo',
        'tipo_archivo',
        'numero_expediente',
    ];

    //LLAVE DE USERS 
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
