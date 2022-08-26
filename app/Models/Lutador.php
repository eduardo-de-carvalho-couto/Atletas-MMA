<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Lutador extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'posicao', 'categoria_id'];
    protected $table = 'lutadores';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function lutas()
    {
        return $this->belongsToMany(Luta::class, 'luta_lutador');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('posicao');
        });

        parent::boot();
        Lutador::deleting(function($lutador){
            $lutador->lutas()->delete();
        });
    }
}
