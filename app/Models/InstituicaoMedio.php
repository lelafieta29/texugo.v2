<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituicaoMedio extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];
    public function dadosacademicos()
    {
        return $this->belongsTo(DadosAcademico::class);
    }
}
