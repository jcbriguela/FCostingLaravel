<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExcelImportController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\UserAuthController;
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

// Route::get('/', function () {
//     return view('index');
// });

//login
Route::GET('Login',[LoginController::class,'Login'])->name('login');

//user registration
Route::POST('UserRegistration',[LoginController::class,'UserRegistration']);



Route::get('/',[DashboardController::class,'index']);
Route::get('importexcel',[ExcelImportController::class,'import_excel']);
Route::post('import-excel',[ExcelImportController::class,'import_excel_post']);

Route::get('addProductsInventory',[ExcelImportController::class,'addProductsInventory']);
Route::get('ForApprovalInventory',[ExcelImportController::class,'ForApprovalInventory']);


//import addProductInventory
Route::GET('ImportexcelProductInv',[ExcelImportController::class,'ImportexcelProductInv']);
Route::POST('Importexcel-ProductInv',[ExcelImportController::class,'ImportexcelProductInvPost']);

Route::POST('StoreProduct',[ProductController::class,'store']);
Route::put('/update-record', [ProductController::class, 'update']);
Route::get('/show-list', [ProductController::class, 'show']);
Route::get('/show-record', [ProductController::class, 'showRecord']);
Route::get('/show-record/{id}', [YourController::class, 'showRecord'])->name('showRecord');

Route::put('/update-status', [ProductController::class, 'updateStatus']);

//register api

// Route::get('register', [LoginController::class,'register'])->name(register);
// Route::post('registerApi', [LoginController::class,'registerApi'])->name(registerApi);
