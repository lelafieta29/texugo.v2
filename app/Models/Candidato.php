<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'utente_id', 'morada_id'];

    public function utente(){
        return $this->hasOne(Utente::class);
    }

    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }

    public function inscricao(){
        return $this->belongsTo(Inscricao::class);
    }
}
