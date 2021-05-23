<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busquedas extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    protected $with = ['inscripciones', 'rubros'];

    public function Inscripciones()
    {
        return $this->hasMany(Inscripciones::class);
    }

    public function Rubros()
    {
        return $this->belongsTo(Rubros::class, 'rubros_id');
    }
}
