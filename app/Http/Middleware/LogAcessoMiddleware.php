<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\LogAcesso;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->server->get('REMOTE_ADDR');  // Captura o IP do cliente
        $rota = $request->getRequestUri();           // Captura a URI requisitada
        LogAcesso::create(['log' => "IP $ip requisitou a rota $rota"]);  // Armazena no log

        return $next($request);
        
    }
}
