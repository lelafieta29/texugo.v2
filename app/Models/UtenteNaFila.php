<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtenteNaFila extends Model
{
    use HasFactory;
    
    protected $fillable = ['utente_id', 'posto_id'];

    public function utente()
    {
        return $this->morphOne(Utente::class, 'utenteable');
    }

    public function posto()
    {
        return $this->belongsTo(Posto::class);
    }
}
