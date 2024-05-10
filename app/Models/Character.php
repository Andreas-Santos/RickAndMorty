<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'personagens';
    protected $fillable = [
        'id',
        'nome', 
        'especie', 
        'imagem', 
        'url',
        'status',
        'genero',
        'localizacao',
        'episodio'];
    public $timestamps = true;
}
