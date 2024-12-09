<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Climate extends Model
{

    protected $fillable = [
        'cidade',
        'data_hora_pesquisa',
        'temperatura',
        'visibilidade',
        'iconeTempo',
        'velocidade_vento',
        'cobertura_nuvens',
        'sensacao',
        'precipitacao',
        'pressao',
        'umidade'
    ];
}
