<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = ['Fornecedor 1'];
        $fornecedores2 = [ 0 => ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '00000', 'ddd' => '11', 'telefone' => '0000-0000'], 1 => ['nome' => 'Fornecedor 2', 'status' => 'N', 'ddd' => '85', 'telefone' => '0000-0000'], 2 => ['nome' => 'Fornecedor 3', 'status' => 'N', 'ddd' => '21', 'telefone' => '0000-0000']];
        $variavelVazia = 0;

        $msg = isset($fornecedores2[1]['cnpj']) ? 'CNPJ Informado' : 'CNPJ não informado';
        echo $msg;

        return view('app.fornecedor.index', compact('fornecedores', 'fornecedores2', 'variavelVazia'));
    }
}
