<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosAcademico extends Model
{
    use HasFactory;
    protected $fillable = ['periodo', 'ano_conclusao','curso_medio_id','instituicao_medio_id','curso_universidade_id','faculdade_id'];

    public function inscricao()
    {
        return $this->belongsTo(Incricao::class);
    }
    public function curso_medio()
    {
        return $this->hasOne(CursoMedio::class);
    }
    public function instituicao_medio()
    {
        return $this->hasOne(InstituicaoMedio::class);
    }
    public function curso_universidade()
    {
        return $this->hasOne(CursoUniversidade::class);
    }
    public function faculdade()
    {
        return $this->hasOne(Faculdade::class);
    }
}
