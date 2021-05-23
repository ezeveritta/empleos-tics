<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripciones extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre', 'apellido', 'busquedas_id'];

    public function Busquedas()
    {
        return $this->belongsTo(Busquedas::class, 'busquedas_id');
    }
}
