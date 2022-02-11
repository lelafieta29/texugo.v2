<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'utente_id'];

    public function utente(){
        return $this->morphOne(Utente::class,'utenteable');
    }

    public function endereco(){
        return $this->hasOne(Endereco::class);
    }

    public function inscricao(){
        return $this->hasOne(Inscricao::class);
    }
}
