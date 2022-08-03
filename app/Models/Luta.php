<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luta extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['lutador_id', 'adversario_id', 'data', 'vitoria'];

    public function lutador()
    {
        return $this->belongsTo(Lutador::class);
    }
}
