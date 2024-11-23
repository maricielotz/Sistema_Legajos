<?php

//IMPORTA TODOS LOS CONTROLADORES DE LAS VISTAS
// ESTA PARTECITA POR SI NOS OLVIDAMOS ES COMPLICADA XD
// DIOSITO PROTEGENOS 
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\DashboardController;
use App\Http\Controllers\Backend\Auth\RegisterController;
use App\Http\Controllers\Backend\Auth\CargoLaboralController; 
use App\Http\Controllers\Backend\Auth\LegajoController;

// RUTAS PARA EL LOGIN
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout.submit');

// Rutas del middleware de autenticación
Route::middleware('auth')->group(function () {
    // Rutas para administradores
    Route::prefix('admin')->name('admin.')->middleware('is_admin')->group(function () {
        Route::get('/', [DashboardController::class, 'adminDashboard'])->name('dashboard');
        
        // Rutas para registrar usuarios
        Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register'); 
        Route::post('/register', [RegisterController::class, 'register'])->name('register.submit'); 
        
        // Rutas para crear cargos laborales
        Route::get('/cargos/create', [CargoLaboralController::class, 'create'])->name('cargos.create');
        Route::post('/cargos', [CargoLaboralController::class, 'store'])->name('cargos.store');
        
        // RUTAS PARA LOS LEGAJOS OH SEÑOR PROTEGEME
        Route::get('/legajos/create', [LegajoController::class, 'create'])->name('legajos.create');
        Route::post('/legajos/store', [LegajoController::class, 'store'])->name('legajos.store');
        Route::post('/legajos/buscar', [LegajoController::class, 'buscarUsuario'])->name('legajos.buscar');

        // Mostrar formulario para buscar el usuario y actualizar legajo
        Route::get('/legajo/actualizar', [LegajoController::class, 'showUpdateForm'])->name('legajo.update.form');
        Route::post('/legajo/buscar', [LegajoController::class, 'buscarUsuarioParaActualizar'])->name('legajo.buscar.update');
        Route::post('/legajo/actualizar', [LegajoController::class, 'actualizarLegajo'])->name('legajo.update');

        // rutas buscar y filtrar
        Route::get('/usuarios/buscar', [LegajoController::class, 'mostrarBusqueda'])->name('usuarios.buscar');
        Route::post('/usuarios/buscar', [LegajoController::class, 'buscarUsuarios'])->name('usuarios.buscar.submit');

    });


    // Dashboard para otros usuarios
    Route::get('/user/dashboard', [DashboardController::class, 'userDashboard'])->name('user.dashboard');
    // Rutas para el usuario :D sin proteccion xd
    // AHORA QUE LO PIENSO PODEMOS AGREGAR COMO MEJORA LA SEGURIDAD QUE DICEN?
    Route::get('/user/legajo/create', [LegajoController::class, 'createLegajo'])->name('legajo.create');
    Route::post('/user/legajo/store', [LegajoController::class, 'storeLegajo'])->name('legajo.store');
    Route::put('/user/legajo/{legajo}', [LegajoController::class, 'actualizarLegajoUsers'])->name('legajo.update');

});
