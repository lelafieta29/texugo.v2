<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    use HasFactory;
    
    protected $fillable = ['nome_maquina', 'utilizador_id','bloco_id'];
    
    public function utilizador()
    {
        return $this->hasOne(Utilizador::class);
    }
    
    public function bloco()
    {
        return $this->hasOne(Bloco::class);
    }
}
