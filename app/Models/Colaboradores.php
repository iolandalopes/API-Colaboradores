<?php

namespace App\Models;

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

    public function rules()
    {
        return [
            'nome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'data_admissao' => 'required'
        ];
    }
}
