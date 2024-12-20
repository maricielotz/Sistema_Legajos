<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //ESTA FUNCION MUESTRA SOLO EL FORMULARIO DEL INICIO
    public function showLoginForm()
    {
        return view('auth.login'); 
    }

    // Procesar el inicio de sesión
    public function login(Request $request)
    {   

        //SELECT *
        $request->validate([
            'nombre_usuario' => 'required|string',
            'password' => 'required|string',
        ]);

        //AQUI SOLO AUTENTICA, COMPARA LO QUE SE INGRESE EN LA BASE DE DATOS
        if (Auth::attempt(['nombre_usuario' => $request->nombre_usuario, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }

        //MENSAJITO DE ERROR
        return back()->withErrors([
            'nombre_usuario' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }

    //PARA CERRAR SESION
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
