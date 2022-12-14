<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedorController extends Controller
{
    /* public function index(){
        $fornecedores = ['Fornecedor 1'];
        $fornecedores2 = [ 0 => ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '00000', 'ddd' => '11', 'telefone' => '0000-0000'], 1 => ['nome' => 'Fornecedor 2', 'status' => 'N', 'ddd' => '85', 'telefone' => '0000-0000', 'cnpj' => '00000',], 2 => ['nome' => 'Fornecedor 3', 'status' => 'N', 'ddd' => '21', 'telefone' => '0000-0000', 'cnpj' => '00000',]];
        $variavelVazia = 0;

        $fornecedores3 = [];

        $msg = isset($fornecedores2[1]['cnpj']) ? 'CNPJ Informado' : 'CNPJ não informado';
        echo $msg;

        return view('app.fornecedor.index', compact('fornecedores', 'fornecedores2', 'variavelVazia', 'fornecedores3'));
    } */

    public function index(){
        return view('app.fornecedor.index');
    }

    public function listar(Request $request){
        
        $fornecedores = Fornecedor::with(['produtos'])->where('nome', 'like', '%'.$request->input('nome').'%')
            ->where('site', 'like', '%'.$request->input('site').'%')
            ->where('uf', 'like', '%'.$request->input('uf').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->paginate(5);

        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores, 'request' => $request->all()]);
    }

    public function adicionar(Request $request){

        $msg = '';
        
        if($request->input('_token') != '' && $request->input('id') == '') {
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
                'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
                'uf.min' => 'O campo uf deve ter no mínimo 2 caracteres',
                'uf.max' => 'O campo uf deve ter no máximo 2 caracteres',
                'email.email' => 'O campo e-mail não foi preenchido corretamente'
            ];

            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());

            $msg = 'Cadastro realizado com sucesso';
        }

        if($request->input('_token') != '' && $request->input('id') != '') {
            $fornecedor = fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());
            if($update){
                $msg = 'Atualização realizada com sucesso';
            }else{
                $msg = 'Erro ao tentar atualizar o registro';
            }
            return redirect()->route('app.fornecedor.editar', ['id' => $request->input('id'), 'msg' => $msg]);
        }

        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    }

    public function editar($id, $msg = ''){
        $fornecedor = fornecedor::find($id);

        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg' => $msg]);
    }

    public function excluir($id){
        $fornecedor = fornecedor::find($id)->delete();
        //$fornecedor = fornecedor::find($id)->forceDelete();

        return redirect()->route('app.fornecedor');
    }
}
