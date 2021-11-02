<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaboradores extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'data_admissao'
    ];
}
