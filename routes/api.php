<?php

use App\Http\Controllers\apiController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('data',[apiController::class,'getData']);

Route::get('get/{id?}',[apiController::class,'getApi']);

Route::get('post',[apiController::class,'postApi']);

Route::get('put',[apiController::class,'putApi']);

Route::get('delete/{id}',[apiController::class,'delete']);

Route::get('search/{servicesincluded}',[apiController::class,'search']);