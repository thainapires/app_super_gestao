<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        echo $metodo_autenticacao .' - ' . $perfil . '<br>';

        $pode_acessar = true;

        if($pode_acessar){
            return $next($request);
        }else{
            return Response('Acesso negado! Rota exige autenticação!');
        }
    }
}
