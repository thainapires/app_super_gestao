<?php

use Illuminate\Database\Seeder;
use App\SiteContato;


class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(21) 99999-9999';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Bem vindo ao sistema Super gestão';
        $contato->save();
        */

        factory(SiteContato::class, 100)->create();
    }
}
