<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $fillable =[
        'nome', 'cnpj', ' endereco',
        'telefone', 'tipo_de_fornecedor'
    ];
}
