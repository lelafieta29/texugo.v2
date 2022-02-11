<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoUniversidade extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'area', 'faculdade_id'];

    public function faculdade(){
        return $this->hasOne(Faculdade::class);
    }
    public function dadosacademicos()
    {
        return $this->belongsTo(DadosAcademico::class);
    }
    public function inscricao()
    {
        return $this->belongsTo(Inscricao::class);
    }

}
