<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('products', ProductController::class);
// The above route means
// |        api/products                | products.index     
// |        api/products                | products.store     
// |        api/products/create         | products.create    
// |        api/products/{product}      | products.show      
// |        api/products/{product}      | products.update       
// |        api/products/{product}      | products.destroy   
// |        api/products/{product}/edit | products.edit    

Route::get('/products/search/{name}', [ProductController::class, 'search']);



// No need for those
// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
