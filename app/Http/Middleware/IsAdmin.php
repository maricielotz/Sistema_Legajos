<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        //EL ROL 1 POR DEFECTO ES ADMINISTRADOR DEL SISTEMA EL ROL 2 ES EMPLEADO COMUN, SE PUEDE CREAR MAS ROLES
        //YO RECOMIENDO QUE SIEMPRE EL ROL 1 SEA EL SISADM PERO ES OPCIONAL
        //AUNQUE SEGUN NUESTRA DOCUMENTACION SOLO HAY UN ADMIN ASI QUEEE ASI SE QUEDA
        if (Auth::check() && Auth::user()->rol_id == 1) { 
            return $next($request);
        }
        //EN CUALQUIER OTRO CASO QUE NO SEA ROL 1 NOS RETORNA AL DASHBOARD DEL USUARIO
        return redirect('/user/dashboard'); 
    }
}
