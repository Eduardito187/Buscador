<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CustomValidateToken;
use App\Http\Controllers\Api\Products\Product;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//params in api
// / => index <= get
// / => store <= post
// /show/{id} => show <= get
// /{id} => update <= patch
// /{id} => destroy <= delete

Route::middleware([CustomValidateToken::class])->group(function () {
    Route::controller(Product::class)->group(function(){
        Route::get('product', 'index');
        Route::post('product', 'store');
        Route::get('product/show/{id}', 'show');
        Route::patch('product/{id}', 'update');
        Route::delete('product/{id}', 'destroy');
    });
});