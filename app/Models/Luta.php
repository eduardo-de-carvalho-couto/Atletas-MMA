<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luta extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['lutador_vencedor_id', 'data'];

    public function lutadores()
    {
        return $this->belongsToMany(Lutador::class, 'luta_lutador');
    }

    public function vencedor()
    {
        return $this->belongsTo(Lutador::class, 'lutador_vencedor_id');
    }
}
