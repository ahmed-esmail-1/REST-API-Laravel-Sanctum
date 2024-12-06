<?php

use App\Http\Controllers\ProductController;
use GuzzleHttp\Middleware;
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

// Public routes
Route::get('/products', [ProductController::class, 'index']); // Display a list of all products
Route::get('/products/{id}', [ProductController::class, 'show']); // Display a specific product
Route::get('/products/search/{name}', [ProductController::class, 'search']);




// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    // add here protected routes
    Route::post('/products', [ProductController::class, 'store']); // Store a newly created product
    Route::put('/products/{id}', [ProductController::class, 'update']); // Update a specific product
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Delete a specific product

});




###
// Route::resource('products', ProductController::class);


// Route::get('/products/search/{name}', [ProductController::class, 'search']);


// The above route means
// |        api/products                | products.index     
// |        api/products                | products.store     
// |        api/products/create         | products.create    
// |        api/products/{product}      | products.show      
// |        api/products/{product}      | products.update       
// |        api/products/{product}      | products.destroy   
// |        api/products/{product}/edit | products.edit  



// No need for those
// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
