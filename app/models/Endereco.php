<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'endereco',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'numero',
        'agenda_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\models\Agenda');
    }
}
