<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $filllable = [
        'nome_fantasia', 'cnpj', 'estado', 'produto_id'
    ];

    public function produto()
    {
        return $this->hasMany(Produto::class);
    }
}
