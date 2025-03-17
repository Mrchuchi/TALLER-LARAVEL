<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    
    use HasFactory;
    
    protected $fillabel = [
        'nombre',
        'descripcion',
    ];

    public function porductos()
    {
        return $this->hasMany(Producto::class);
    }
}
