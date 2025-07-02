<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    use HasFactory;
    protected $table = 'ejemplares'; 
    protected $fillable = ['libro_id', 'codigo', 'estado'];

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
}
