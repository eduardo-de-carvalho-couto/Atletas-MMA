<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['peso', 'capa'];


    public function lutadores()
    {
        return $this->hasMany(Lutador::class);
    }

    public function lutas()
    {
        return $this->hasMany(Luta::class);
    }
}
