<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;
    
    protected $fillable = ['referencia', 'valor', 'data_pagamento'];
    
    public function inscricao()
    {
        return $this->belongsTo(Inscricao::class);
    }
}
