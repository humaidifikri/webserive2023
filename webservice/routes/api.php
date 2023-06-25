<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::resource('users',UserController::class);


Route::get('/',function(){
    echo env('APP_NAME');
});

Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'show']);
Route::post('/users',[UserController::class,'store']);
Route::put('/users',[UserController::class,'update']);
Route::delete('/users',[UserController::class,'destroy']);

// Route::middleware('auth:sanctum')->get('/users', function (Request $request) {
//     return $request->user();
// });
