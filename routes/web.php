<?php
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\NivelEstudioController;
use App\Http\Controllers\NivelGradoController;
use App\Http\Controllers\CargoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

#calculadora
Route::get('/calculadora', [PruebaController::class, 'mostar_calculadora'])->name('ruta_mostrar_calculadora');
Route::post('/calcuadora', [PruebaController::class, 'calcular'])->name('ruta_resultado_calculadora');


#actividad de producto
Route::get('/producto', [ProductoController::class, 'create'])->name('ruta_formulario_producto');
Route::post('/creacion', [ProductoController::class, 'stores'])->name('ruta_creacion_producto');
Route::get('/products', [ProductoController::class, 'index'])->name('productos_index');


#infromaciond e la empresa
Route::get('/nosotros', [PruebaController::class, 'MostrarNosotros'])->name('(ruta_vista_nosotros');
Route::get('/mision', [PruebaController::class, 'MostrarMision'])->name('ruta_vista_mision');
Route::get('/vision', [PruebaController::class, 'MostrarVision'])->name('ruta_vista_vision');


#Empresa
Route::get('/empresas', [EmpresaController::class, 'indexEmpresa'])->name('empresas.index'); 
Route::get('/empresas/create', [EmpresaController::class, 'createEmpresa'])->name('empresas.create'); 
Route::post('/empresas', [EmpresaController::class, 'storeEmpresa'])->name('empresas.store'); 


#nivel estudio
Route::get('/nivelEstudio', [NivelEstudioController::class, 'index'])->name('nivelestudios.index');
Route::get('/nivelEstudio/create', [NivelEstudioController::class, 'create'])->name('nivelestudios.create');
Route::post('/nivelEstudio/store', [NivelEstudioController::class, 'store'])->name('nivelestudios.store');


#nivel estudio
Route::get('/nivelGrado', [NivelGradoController::class, 'index'])->name('nivelGrado.index');
Route::get('/nivelGrado/create', [NivelGradoController::class, 'create'])->name('nivelGrado.create');
Route::post('/nivelGrado/store', [NivelGradoController::class, 'store'])->name('nivelGrado.store');


#cragos
Route::get('/cargos', [CargoController::class, 'index'])->name('cargos.index');
Route::get('/cargos/create', [CargoController::class, 'create'])->name('cargos.create');
Route::post('/cargos/store', [CargoController::class, 'store'])->name('cargos.store');




