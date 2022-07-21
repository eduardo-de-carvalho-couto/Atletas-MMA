<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luta extends Model
{
    use HasFactory;

    public function lutador()
    {
        return $this->belongsTo(Lutador::class);
    }
}
