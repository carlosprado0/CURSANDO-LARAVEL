<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao, $perfil): Response
    {
        echo $metodo_autenticacao.'-'.$perfil.'<br>';

        if($metodo_autenticacao == 'padrao'){
            echo 'Verificar o usuario e a senha no db'.$perfil.'<br>';

        } 
        if($metodo_autenticacao == 'ldap') {
            echo 'verificar o usuario e senha no AD'.$perfil.'<br>';

        }
        if($perfil == 'visitante'){
            echo 'exibir apenas alguns recursos';

        } else {
            echo 'carregar o perfil do banco de dados';
        }

        return $next($request);
    }
}
