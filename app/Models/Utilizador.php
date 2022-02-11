<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilizador extends Model
{
    use HasFactory;
    protected $fillable = ['senha', 'login', 'nivel_acesso','area_trabalho','pessoa_id'];

    public function pessoa(){
        return $this->morphOne(Pessoa::class,'person');
    }
}
