<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class authTestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $method, $perfil)
    {

        echo $method.'<br>'; 
        if($method == 'default'){
            echo '• verifique as credencias de acesso ao login na base'.'<br>';
        }
        if($method == 'ldap'){
            echo '• verifique as credencias de acesso ao login na base'.'<br>';
        }
        if ($perfil == 'visitante'){
            echo '• conteudo limitado'.'<br>';
        }
        if ($perfil == 'adm'){
            echo '• conteudo ilimitado'.'<br>';
        }


       //verifica se usuario tem acesso a rota;
        if(false){
             return $next($request);
        }
        else{
            return Response("• Acesso Negado, Para acessar a pagina é necessario realizar logon");            
        }   



    }
}
