<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\ProductAutocompleteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StockController;
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

Route::group(['middleware' => ['is_connected']], function () {
});

Route::get('/', [HomeController::class, 'index']);
//Route::get('/{activeTab}', [HomeController::class, 'index']);
Route::get('/success', [HomeController::class, 'success']);
//Route::get('/success/{tabActive}', [HomeController::class, 'success']);
Route::get('/failure', [HomeController::class, 'failure']);


Route::get('/brands/create', [BrandController::class, 'formCreateBrd']);
Route::post('/brands/create', [BrandController::class, 'createBrd']);
Route::get('/brands/json', [BrandController::class, 'getAllBrandsJson']);
Route::get('/brands/{brandId}/edit', [BrandController::class, 'formUpdateBrd']);
Route::post('/brands/{brandId}/edit', [BrandController::class, 'updateBrd']);
Route::get('/brands/{brandId}/delete', [BrandController::class, 'deleteBrd']);

Route::get('/categories/create', [CategoryController::class, 'formCreateCat']);
Route::post('/categories/create', [CategoryController::class, 'createCat']);
Route::get('/categories/{categoryId}/edit', [CategoryController::class, 'formUpdateCat']);
Route::post('/categories/{categoryId}/edit', [CategoryController::class, 'updateCat']);
Route::get('/categories/{categoryId}/delete', [CategoryController::class, 'deleteCat']);

Route::get('/products/create', [ProductController::class, 'formCreateProd']);
Route::post('/products/create', [ProductController::class, 'createProd']);
//Route::get('/products/liste/all', [ProductController::class, 'listeAllProd']);
Route::get('/products/json', [ProductController::class, 'allJsonProd']);
Route::get('/products/{productId}/edit', [ProductController::class, 'formUpdateProd']);
Route::post('/products/{productId}/edit', [ProductController::class, 'updateProd']);
Route::get('/products/{productId}/delete', [ProductController::class, 'deleteProd']);
Route::get('/products/select', [ProductAutocompleteController::class, 'formSelectProduct']);
Route::post('/products/select', [ProductAutocompleteController::class, 'selectProduct']);


Route::get('/stocks/create', [StockController::class, 'formCreateStk']);
Route::post('/stocks/create', [StockController::class, 'createStk']);
//Route::get('/stocks/liste/all', [StockController::class, 'listeAllStk']);
Route::get('/stocks/json', [StockController::class, 'allJsonStk']);
Route::get('/stocks/{stockId}/edit', [StockController::class, 'frmUpdateStk']);
Route::post('/stocks/{stockId}/edit', [StockController::class, 'updateStk']);

Route::get('/customers/create', [CustomerController::class, 'formCreateCust']);
Route::post('/customers/create', [CustomerController::class, 'createCust']);
Route::get('/customers/json', [CustomerController::class, 'allJsonCust']);
Route::get('/customers/{customerId}/edit', [CustomerController::class, 'formUpdateCust']);
Route::post('/customers/{customerId}/edit', [CustomerController::class, 'updateCust']);
//Route::get('/customers/{customerId}/delete', [CustomerController::class, 'deleteCust']);

Route::get('/orders/json', [OrderController::class, 'allJsonOrd']);

Route::get('/orderItems/json', [OrderItemsController::class, 'allJsonOrdItem']);


Route::get('/staffs/create', [StaffController::class, 'formCreateStf']);
Route::post('/staffs/create', [StaffController::class, 'createStf']);
Route::get('/staffs/{staffId}/edit', [StaffController::class, 'formUpdateStf']);
Route::post('/staffs/{staffId}/edit', [StaffController::class, 'updateStf']);






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
