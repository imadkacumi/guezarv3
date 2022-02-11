<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', [ClientController::class, 'home']);
Route::get('/paiement', [ClientController::class, 'paiement']);
Route::get('/shop', [ClientController::class, 'shop']);
Route::get('/panier', [ClientController::class, 'panier']);
Route::get('/login', [ClientController::class, 'login']);
Route::get('/signup', [ClientController::class, 'signup']);
Route::get('/orders', [ClientController::class, 'orders']);
Route::get('/ajouteraupanier/{id}', [ClientController::class, 'ajouteraupanier']);



Route::get('/admin', [AdminController::class, 'dashboard']);


Route::get('/addcategory', [CategoryController::class, 'addcategory']);
Route::get('/categories', [CategoryController::class, 'categories']);
Route::post('/savecategory', [CategoryController::class, 'savecategory']);
Route::get('/edit_category/{id}', [CategoryController::class, 'edit_category']);
Route::post('/updatecategory', [CategoryController::class, 'updatecategory']);
Route::get('/delete_category/{id}', [CategoryController::class, 'delete_category']);


Route::get('/addslider', [SliderController::class, 'addslider']);
Route::post('saveslider', [SliderController::class, 'saveslider']);
Route::get('/sliders', [SliderController::class, 'sliders']);
Route::get('/edit_slider/{id}', [SliderController::class, 'edit_slider']);
Route::post('/updateslider', [SliderController::class, 'updateslider']);
Route::get('/delete_slider/{id}', [SliderController::class, 'delete_slider']);
Route::get('/activer_slider/{id}' , [SliderController::class, 'activer_slider']);
Route::get('/desactiver_slider/{id}' , [SliderController::class, 'desactiver_slider']);


Route::get('/addproduct', [ProductController::class, 'addproduct']);
Route::post('/saveproduct', [ProductController::class, 'saveproduct']);
Route::get('/products', [ProductController::class, 'products']);
Route::get('/edit_product/{id}', [ProductController::class, 'edit_product']);
Route::post('/updateproduct', [ProductController::class, 'updateproduct']);
Route::get('/delete_product/{id}' , [ProductController::class, 'delete_product']);
Route::get('/activer_product/{id}' , [ProductController::class, 'activer_product']);
Route::get('/desactiver_product/{id}' , [ProductController::class, 'desactiver_product']);
Route::get('/activer_productacc/{id}' , [ProductController::class, 'activer_productacc']);
Route::get('/desactiver_productacc/{id}' , [ProductController::class, 'desactiver_productacc']);
Route::get('/select_par_cat/{category_name}', [ProductController::class, 'select_par_cat']);
