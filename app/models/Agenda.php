<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'email',
        'telefone',        
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo('App\User','id','user_id');
    }

    public function enderecos()
    {
        return $this->hasOne('App\models\Endereco');
    }
}
