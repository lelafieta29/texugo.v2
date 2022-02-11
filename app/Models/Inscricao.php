<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    use HasFactory;
    protected $fillable = ['filho_antigo_combatente','necessidade_especial', 'bloco_id','candidato_id','dados_academicos_id','pagamento_id','curso_universidade_id'];
    public function bloco()
    {
        return $this->hasOne(Bloco::class);
    }
    public function candidato()
    {
        return $this->hasOne(Incricao::class);
    }
    public function dadosacademicos()
    {
        return $this->belongsTo(DadosAcademico::class);
    }
    public function pagamento()
    {
        return $this->hasMany(Pagamento::class);
    }
    public function cursouniversidade()
    {
        return $this->hasMany(Incricao::class);
    }
}
