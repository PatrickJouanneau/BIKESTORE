<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);
Route::get('/formStaff', [\App\Http\Controllers\FormulaireStaffController::class, 'formulaireStaff']);
Route::get('/saveform', [\App\Http\Controllers\FormulaireStaffController::class, 'saveFormulaireStaff']);
Route::get('/formLogin', [\App\Http\Controllers\FormulaireLoginController::class, 'formulaireLogin']);

Route::get('/fact', [\App\Http\Controllers\FactureController::class, 'facture']);


Route::get('/4', [\App\Http\Controllers\BikeController::class, 'register']);
Route::get('/1', [\App\Http\Controllers\BikeController::class, 'categories']);
Route::get('/2', [\App\Http\Controllers\BikeController::class, 'order']);
Route::get('/3', [\App\Http\Controllers\BikeController::class, 'bonjour']);
Route::get('/5', [\App\Http\Controllers\BikeController::class, 'accueil']);
Route::get('/info', [\App\Http\Controllers\BikeController::class, 'phpInfo']);
Route::get('/6', [\App\Http\Controllers\BikeController::class, 'home']);
Route::get('/tables', [\App\Http\Controllers\BikeController::class, 'tables']);
Route::get('/pdf', [\App\Http\Controllers\BikeController::class, 'pdf']);

Route::get('/liste', [\App\Http\Controllers\StaffController::class, 'listePerso']);


/*
Route::get('/3', function () {
    $info = DB::select('SELECT * FROM production.categories');
    return response($info);
    //return $info;
});
*/
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
