<?php

use App\Http\Controllers\BaptismController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\MarriageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/

// Rutas publicas
Auth::routes();
Route::view('', 'home')->name('home');

// Rutas protegidas
Route::group(['middleware' => ['auth:sanctum']], function () {
    /** -------------------------------------- RUTAS USUARIOS --------------------------------------------- */
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');

    /** -------------------------------------- RUTAS ROLES ------------------------------------------------ */
    Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::get('roles/edit/{role}', [RoleController::class, 'edit'])->name('roles.edit');

    /** -------------------------------------- RUTAS MATRIMONIOS ------------------------------------------ */
    Route::get('marriages', [MarriageController::class, 'index'])->name('marriages.index');
    Route::get('marriages/create', [MarriageController::class, 'create'])->name('marriages.create');
    Route::get('marriages/edit/{marriage}', [MarriageController::class, 'edit'])->name('marriages.edit');

    /** -------------------------------------- RUTAS CONFIRMACIONES --------------------------------------- */
    Route::get('confirmations', [ConfirmationController::class, 'index'])->name('confirmations.index');
    Route::get('confirmations/create', [ConfirmationController::class, 'create'])->name('confirmations.create');
    Route::get('confirmations/edit/{confirmation}', [ConfirmationController::class, 'edit'])->name('confirmations.edit');

    /** -------------------------------------- RUTAS BAUTIZOS --------------------------------------------- */
    Route::get('baptisms', [BaptismController::class, 'index'])->name('baptisms.index');
    Route::get('baptisms/create', [BaptismController::class, 'create'])->name('baptisms.create');
    Route::get('baptisms/edit/{baptism}', [BaptismController::class, 'edit'])->name('baptisms.edit');

    /** -------------------------------------- RUTAS CERTIFICADOS --------------------------------------------- */
    Route::get('marriages/pdf/{marriage}', [MarriageController::class, 'certificate'])->name('descargarPDFMatrimonio');
    Route::get('confirmations/pdf/{confirmation}', [ConfirmationController::class, 'certificate'])->name('descargarPDFConfirmacion');
    Route::get('baptisms/pdf/{baptism}', [BaptismController::class, 'certificate'])->name('descargarPDFBautizo');

    Route::apiResource('users', UserController::class); //->except('show')
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('marriages', MarriageController::class);
    Route::apiResource('confirmations', ConfirmationController::class);
    Route::apiResource('baptisms', BaptismController::class);
    
    /** -------------------------------------- RUTAS REGISTROS MATRIMONIOS REGISTRADOS --------------------------------------------- */
    //Route::get('marriages/show/{marriage}', [MarriageController::class, 'show'])->name('marriages.show');
    //Route::put('marriages/show/{marriage}', [MarriageController::class, 'ingresarRegistro'])->name('marriages.ingresarRegistro');
    
    /** -------------------------------------- RUTAS REGISTROS CONFIRMACIONES REGISTRADOS --------------------------------------------- */
    //Route::get('confirmations/show/{confirmation}', [ConfirmationController::class, 'show'])->name('confirmations.show');
    //Route::put('confirmations/show/{confirmation}', [ConfirmationController::class, 'ingresarRegistro'])->name('confirmations.ingresarRegistro');

    /** -------------------------------------- RUTAS REGISTROS BAUTIZOS REGISTRADOS --------------------------------------------- */
    //Route::get('baptisms/show/{baptism}', [BaptismController::class, 'show'])->name('baptisms.show');
    //Route::put('baptisms/show/{baptism}', [BaptismController::class, 'ingresarRegistro'])->name('baptisms.ingresarRegistro');
});