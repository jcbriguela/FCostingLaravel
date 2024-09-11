<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExcelImportController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RolesAndPermissionController;
use App\Http\Controllers\ReceivingController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ReferencesController;


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

//user registration

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
Route::get('TransactionType', function () {
    return view('Prototype.Reports.ReportTransactionType');
});
// Route::get('PurchaseOrder', function () {
//     return view('Prototype.Inventory.PurchaseOrder');
// });
// Route::get('Receiving', function () {
//     return view('Prototype.Inventory.Receiving');
//     // return view('Prototype.Inventory.Receiving')->middleware('permission:Receiving');
// });
Route::get('/Receiving',[ReceivingController::class,'index']);

Route::get('Inventory', function () {
    return view('Prototype.Inventory.InventoryList');

//     // return view('Prototype.Inventory.Receiving')->middleware('permission:Receiving');
});
// Route::GET('Inventory', [InventoryController::class, 'create']);

Route::get('onGoingDev', function () {
    return view('Prototype.ongoingDev');
    // return view('Prototype.Inventory.Receiving')->middleware('permission:Receiving');
});
Route::get('InventoryList2', function () {
    return view('Prototype.ongoingDev');
    // return view('Prototype.Inventory.Receiving')->middleware('permission:Receiving');
});


// Route::POST('/inventory-list/create', [InventoryController::class, 'create']);
Route::GET('/inventory-list/{id}', [InventoryController::class, 'create']);
Route::get('/InventoryList2/{value_id}', 'InventoryController@yourMethod');
Route::get('/ApprovalList',[InventoryController::class,'index']);

Route::POST('/storePO', [ReceivingController::class, 'storePO']);
// Route::GET('/getReceivingData', [ReceivingController::class, '']);
Route::get('/getReceivingData', 'ReceivingDataController@createPO')->name('getReceivingData');
Route::get('/SalesOrder',[ReceivingController::class,'indexPO']);

Route::get('/', function () {
    return view('auth.login');
});

Route::get('add-permission', [RolesAndPermissionController::class, 'addPermission']);


Route::get('/dashboard', function () {
    return view('pages.dashboard');
});


// ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/logout', LoginController::class)->name('logout');


//Receiving
Route::get('/get_last_id', [ReceivingController::class, 'create'])->name('get_last_id');
Route::post('/save_datagrid_data', [ReceivingController::class, 'store'])->name('save_datagrid_data');
Route::get('/rec-show-list/id', 'ReceivingController@show')->name('rec-show-list');

Route::post('/update-status', [ReceivingController::class, 'update'])->name('update-status');



//Receferences
Route::GET('References', [ReferencesController::class, 'index']);
Route::POST('store-reference',[ReferencesController::class,'store']);
Route::GET('select-module', [ReferencesController::class, 'show'])->name('select-module');



require __DIR__.'/auth.php';