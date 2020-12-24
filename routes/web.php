<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\StaffController;
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
Route::group(['middleware' => ['is_connected']], function(){

});

Route::get('/', [HomeController::class, 'index']);
//Route::get('/{activeTab}', [HomeController::class, 'index']);
Route::get('/success', [HomeController::class, 'success']);
//Route::get('/success/{tabActive}', [HomeController::class, 'success']);
Route::get('/failure', [HomeController::class, 'failure']);


Route::get('/brands/create', [BrandsController::class, 'formCreateBrand']);
Route::post('/brands/create', [BrandsController::class, 'createBrand']);
Route::get('/brands/json', [BrandsController::class, 'getAllBrandsJson']);
Route::get('/brands/{brandId}/edit', [BrandsController::class, 'formUpdateBrand']);
Route::post('/brands/{brandId}/edit', [BrandsController::class, 'updateBrand']);
Route::get('/brands/{brandId}/delete', [BrandsController::class, 'deleteBrand']);

Route::get('/categories/create', [CategoryController::class, 'formCreateCat']);
Route::post('/categories/create', [CategoryController::class, 'createCat']);
Route::get('/categories/{categoryId}/edit', [CategoryController::class, 'formUpdateCat']);
Route::post('/categories/{categoryId}/edit', [CategoryController::class, 'updateCat']);
Route::get('/categories/{categoryId}/delete', [CategoryController::class, 'deleteCat']);






Route::get('/error', [LoginController::class, 'index']);
Route::post('/error', [LoginController::class, 'login']);






//Route::get('brand/creation', [
//    'as' => 'produits.create',
//    'uses' => 'HomeController@createBrand',
//]);





Route::get('/formLogin', [\App\Http\Controllers\FormulaireLoginController::class, 'formulaireLogin']);

Route::get('/fact', [\App\Http\Controllers\FactureController::class, 'facture']);

Route::get('/1', [BikeController::class, 'categories']);
Route::get('/2', [\App\Http\Controllers\BikeController::class, 'order']);
Route::get('/3', [\App\Http\Controllers\BikeController::class, 'bonjour']);
Route::get('/5', [\App\Http\Controllers\BikeController::class, 'accueil']);
Route::get('/info', [HomeController::class, 'phpinfo']);
Route::get('/6', [\App\Http\Controllers\BikeController::class, 'home']);
Route::get('/pdf', [\App\Http\Controllers\BikeController::class, 'pdf']);



/*
Route::get('/3', function () {
    $info = DB::select('SELECT * FROM production.categories');
    return response($info);
    //return $info;
});
*/
