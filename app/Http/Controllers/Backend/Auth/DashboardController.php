<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //DICCIONARIO A LA MANO MUCHACHOS 
    //ACA ELEGIMOS A QUE DASHBOARD REDIRECCIONARA, FUNCIONA CON UN MIDDLEWARE PARA LA AUTENTICACION
    //DASHBOARD DEL ADMIN TODO PODEROSO
    public function adminDashboard()
    {
        //return view('layouts.master');
        return view('admin.dashboard'); 
    }
    
    //DASBOARD DEL USER O EL PERSONAL MORTAL
    public function userDashboard()
    {
        return view('user.dashboard'); 
    }
}
