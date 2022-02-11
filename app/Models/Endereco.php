<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $fillable = ['candidato_id','municipio_id'];

    public function candidato(){
        return $this->hasMany(Candidato::class);
    }

    public function municipio(){
        return $this->hasOne(Municipio::class);
    }

}
