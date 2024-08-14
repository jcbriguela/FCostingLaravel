<?php

use App\Http\Controllers\ProfileController;
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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/', function () {
    return view('Login.login');
});
Route::get('/login',[DashboardController::class,'index']);



// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [LoginController::class, 'store']);



//user registration
Route::POST('UserRegistration',[LoginController::class,'UserRegistration']);



Route::get('/dashboard',[DashboardController::class,'index']);
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
Route::put('/submit-list', [ProductController::class, 'storeList']);

Route::put('/update-statusB', [ProductController::class, 'updateStatusB']);

//** PROTOTYPE */

// Route::GET('UpIngredientList',[ExcelImportController::class,'ImportexcelProductInv']);
Route::get('UpIngredientList', function () {
    return view('Prototype.RawMats.UploaderIngredientsList');
});
Route::get('UpForApprovalInventory', function () {
    return view('Prototype.RawMats.ApproverIngredientsList');
});
Route::get('UPaddProductsInventory', function () {
    return view('Prototype.RawMats.UploaderaddInventoryProducts');
});
Route::get('FGupload', function () {
    return view('Prototype.FinishGood.UploadSales');
});
Route::get('ProductPerformance', function () {
    return view('Prototype.Reports.ReportProductPerformance');
});
Route::get('ProductPerformance', function () {
    return view('Prototype.Reports.ReportCustomerSegmentation');
});
Route::get('SalesOverTime', function () {
    return view('Prototype.Reports.ReportSalesOverTime');
});

require __DIR__.'/auth.php';