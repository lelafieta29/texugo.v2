<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculdade extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function curso_universidades(){
        return $this->belongsTo(CursoUniversidade::class);
    }
    public function dadosacademicos(){
        return $this->belongsTo(DadosAcademico::class);
    }
}
