<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoMedio extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'area'];

    public function utente()
    {
        return $this->hasMany(Utente::class);
    }

    public function dadosacademicos()
    {
        return $this->belongsTo(DadosAcademico::class);
    }
}

