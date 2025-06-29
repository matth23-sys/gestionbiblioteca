<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = "libros"; 

    protected $fillable = [
        'titulo',
        'autor',
        'isbn',
        'categoria',
        'numero_ejemplares',
        'imagen'
    ];

    public $timestamps = false;

    public function ejemplares()
{
    return $this->hasMany(Ejemplar::class);
}

}
