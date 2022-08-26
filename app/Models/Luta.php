<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luta extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['data'];

    public function lutadores()
    {
        return $this->belongsToMany(Lutador::class, 'luta_lutador')->withPivot('vencedor');
    }
}
