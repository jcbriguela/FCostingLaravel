<?php
use \App\Http\Controllers\Api\V1\Auth;
use \App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\V1\Auth\RegisterController;
use \App\Http\Controllers\Api\V1\Auth\api;


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
 Route::post('auth/register', Auth\RegisterController::class);
Route::post('login',[App\Http\Controllers\UserAuthController::class,'login']);
Route::post('logout',[App\Http\Controllers\UserAuthController::class,'logout'])
  ->middleware('auth:sanctum');

// Route::post("auth/register", [Auth\RegisterController::class."register"]);



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
