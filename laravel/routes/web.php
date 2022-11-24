<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MarriageController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\BaptismController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ChapelController;
use App\Http\Controllers\ParishPriestController;
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
    Route::get('users/assign/{user}', [UserController::class, 'assign'])->name('users.assign');
    Route::put('users/assign/{user}', [UserController::class, 'updateRole']);

    /** -------------------------------------- RUTAS ROLES ------------------------------------------------ */
    Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::get('roles/edit/{role}', [RoleController::class, 'edit'])->name('roles.edit');

    /** -------------------------------------- RUTAS CERTIFICADOS --------------------------------------------- */
    Route::get('certificates', [CertificateController::class, 'index'])->name('certificates.index');
    Route::get('certificates/create', [CertificateController::class, 'create'])->name('certificates.create');
    Route::get('certificates/edit/{certificate}', [CertificateController::class, 'edit'])->name('certificates.edit');

    /** -------------------------------------- RUTAS CAPILLAS --------------------------------------------- */
    Route::get('chapels', [ChapelController::class, 'index'])->name('chapels.index');
    Route::get('chapels/create', [ChapelController::class, 'create'])->name('chapels.create');
    Route::get('chapels/edit/{certificate}', [ChapelController::class, 'edit'])->name('chapels.edit');

    /** -------------------------------------- RUTAS PARROCOS --------------------------------------------- */
    Route::get('parishpriests', [ParishPriestController::class, 'index'])->name('parishpriests.index');
    Route::get('parishpriests/create', [ParishPriestController::class, 'create'])->name('parishpriests.create');
    Route::get('parishpriests/edit/{certificate}', [ParishPriestController::class, 'edit'])->name('parishpriests.edit');

    /** -------------------------------------- RUTAS MATRIMONIOS ------------------------------------------ */
    Route::get('marriages', [MarriageController::class, 'index'])->name('marriages.index');
    Route::get('marriages/create', [MarriageController::class, 'create'])->name('marriages.create');
    Route::get('marriages/edit/{marriage}', [MarriageController::class, 'edit'])->name('marriages.edit');
    Route::get('marriages/pdf/{marriage}', [MarriageController::class, 'certificate'])->name('marriage.pdf');
    Route::get('marriages/export', [MarriageController::class, 'exportMarriages'])->name('marriages.export');
    Route::get('marriages/import', [MarriageController::class, 'importView'])->name('marriages.import');
    Route::post('marriages/importPost', [MarriageController::class, 'importMarriages'])->name('marriages.importPost');

    /** -------------------------------------- RUTAS CONFIRMACIONES --------------------------------------- */
    Route::get('confirmations', [ConfirmationController::class, 'index'])->name('confirmations.index');
    Route::get('confirmations/create', [ConfirmationController::class, 'create'])->name('confirmations.create');
    Route::get('confirmations/edit/{confirmation}', [ConfirmationController::class, 'edit'])->name('confirmations.edit');
    Route::get('confirmations/pdf/{confirmation}', [ConfirmationController::class, 'certificate'])->name('confirmation.pdf');
    Route::get('confirmations/export', [ConfirmationController::class, 'exportConfirmations'])->name('confirmations.export');
    Route::get('confirmations/import', [ConfirmationController::class, 'importView'])->name('confirmations.import');
    Route::post('confirmations/importPost', [ConfirmationController::class, 'importConfirmations'])->name('confirmations.importPost');

    /** -------------------------------------- RUTAS BAUTIZOS --------------------------------------------- */
    Route::get('baptisms', [BaptismController::class, 'index'])->name('baptisms.index');
    Route::get('baptisms/create', [BaptismController::class, 'create'])->name('baptisms.create');
    Route::get('baptisms/edit/{baptism}', [BaptismController::class, 'edit'])->name('baptisms.edit');
    Route::get('baptisms/pdf/{baptism}', [BaptismController::class, 'certificate'])->name('baptism.pdf');
    Route::get('baptisms/export', [BaptismController::class, 'exportBaptisms'])->name('baptisms.export');
    Route::get('baptisms/import', [BaptismController::class, 'importView'])->name('baptisms.import');
    Route::post('baptisms/importPost', [BaptismController::class, 'importBaptisms'])->name('baptisms.importPost');

    Route::apiResource('users', UserController::class); //->except('show')
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('certificates', CertificateController::class);
    Route::apiResource('chapels', ChapelController::class);
    Route::apiResource('parishpriests', ParishPriestController::class);
    Route::apiResource('marriages', MarriageController::class);
    Route::apiResource('confirmations', ConfirmationController::class);
    Route::apiResource('baptisms', BaptismController::class);
});