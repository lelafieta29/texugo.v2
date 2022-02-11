<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posto extends Model
{
    use HasFactory;
    
    protected $fillable = ['utilizador_id', 'bloco_id'];
    
    public function utilizador()
    {
        return $this->hasMany(Utilizador::class);
    }
    
    public function bloco()
    {
        return $this->belongsTo(Bloco::class);
    }
    
}
