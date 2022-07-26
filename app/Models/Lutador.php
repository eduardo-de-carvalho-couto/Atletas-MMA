<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lutador extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'posicao', 'vitorias', 'derrotas', 'categoria_id'];
    protected $table = 'lutadores';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function lutas()
    {
        return $this->hasMany(Luta::class);
    }
}
