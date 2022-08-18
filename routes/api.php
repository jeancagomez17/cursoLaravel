<?php

use App\Http\Controllers\v1\ProductController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
'prefix' => 'v1'
], function() {
    Route::get('/products', [ProductController::class, 'index']); //metodo que se va a ejecutar
    // Route::get('/products/{id}', [ProductController::class, 'show']);
    // Route::post('/products', [ProductController::class, 'store']);
    // Route::put('/products', [ProductController::class, 'update']);
});
