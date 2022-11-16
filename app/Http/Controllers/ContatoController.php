<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
        //print_r($request->all());
        //print_r($request->input('email'));

        /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        $contato->save();
        */

        /*$contato = new SiteContato();
        $contato->fill($request->all());
        print_r($contato->getAttributes());
        $contato->save();*/

        /*$contato = new SiteContato();
        $contato->create($request->all());*/

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){
        //Validação dos dados

        $regras = 
        [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',
        ];

        $feedbacks = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'nome.unique' => 'O nome informado já está incluso',
            'email.email' => 'O email informado não é válido',
            'mensagem.max' => 'A mensagem dever ter no máximo 2000 caracteres',
            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate(
            $regras, $feedbacks
        );

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
