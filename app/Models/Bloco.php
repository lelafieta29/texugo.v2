<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloco extends Model
{
    use HasFactory;

    protected $fillable = ['nome_do_bloco'];

    public function inscricao(){
        return $this->hasMany(Inscricao::class);
    }

    public function maquina(){
        return $this->hasMany(Maquina::class);
    }

    public function posto(){
        return $this->hasMany(Posto::class);
    }
    
}
