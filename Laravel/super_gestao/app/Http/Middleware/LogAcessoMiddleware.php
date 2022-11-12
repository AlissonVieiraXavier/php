<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso;
use Closure;
use Illuminate\Http\Request;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        $ip = $request->server->get('REMOTE_ADDR');
        $path = $request->getRequestUri();

        LogAcesso::create(['log'=>"Acesso registrado pelo ip: $ip e rota $path"]);
        
        //return Response('request impacada'); 
        return $next($request);

    }
}
