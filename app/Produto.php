<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id'];

    public function produtoDetalhe(){
        //Relacionamento 1 pra 1
        return $this->hasOne('App\ProdutoDetalhe');
    }
}