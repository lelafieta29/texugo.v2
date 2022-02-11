<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    use HasFactory;
    protected $fillable = ['prioridade', 'genero', 'area_medio_id','pessoa_id'];
    
    public function utenteable()
    {
        return $this->morphTo();
    }

    public function pessoa()
    {
        return $this->morphOne(Pessoa::class,'person');
    }



}
