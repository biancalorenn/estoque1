<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $filllable = [
        'descricao', 'complemento', 'quantidade',
    ];

    /*
    public function fornecedor()
    {
        return $this->hasOne(Fornecedor::class);
    }
    */
}
