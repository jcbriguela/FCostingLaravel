<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Imports\ExcelImport; 

use App\Models\ExcelImp;
use App\Imports\ExcelProductInvImports; 
use App\Models\ExcelProductInvModels;
use Illuminate\Support\Facades\Http;
use App\Imports\ImportMetadata;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;


class ExcelImportController extends Controller
{
    public function import_excel()
    {
        return view('pages.importExcel');
    }

    public function import_excel_post(Request $request)
    {
        // dd($request->file('excel_file'));
        Excel::import(new ExcelImport, $request->file('excel_file'));
        return redirect('importexcel')->with('success', 'File uploaded successfully.');
        
    }
    public function addProductsInventory()
    {
        return view('pages.addInventoryProducts');
    }
    public function ForApprovalInventory()
    {
        return view('pages.forApprovalInventoryProducts');
    }
    
    public function ImportexcelProductInv(Request $request )
    {
        //**FROM API */
        //$baseUrl = env('APP_URL');
        // $apiUrl = $baseUrl . '/api/product/lists?';
        // $response = Http::get($apiUrl);
        //return view('excel.ImportexcelProductInv',['data'=> $response->collect()],compact('baseUrl'));
       
        $response = DB::table('uplproduct')
                     ->get();
        $data =json_decode($response,true);
        return view('excel.ImportexcelProductInv',compact('data'));

    }
    
    public function ImportexcelProductInvPost(Request $request)
    {
        //**FROM API */
        // $baseUrl = env('APP_URL');
        // $apiUrl = $baseUrl . '/api/product/lists?';
        // $response = Http::get($apiUrl);

        // $response = DB::table('uplproduct')->get();
        $response = DB::select('CALL sSP_UPLOADFILE_STATUS');

        //  $validatedData = $request->validate([
        // 'file' => 'required|file|mimes:xlsx,xls,csv'
        // ]);
       $file = $request->file('excel_file');
       $filename = $file->getClientOriginalName();
       $import = new ExcelProductInvImports($filename);
    
            // if (Excel::import($import, $file)) {
            //     // Handle successful response
            //     return redirect()->back()->with([
            //         'data' => $response->collect(),
            //         'alert' => 'Data sent successfully'
            //     ]);
            // } else {
            //     // Handle error response
            //     return redirect()->back()->with('alert', 'Error sending data');
            // }

            try {
                Excel::import($import, $file);
                return redirect()->back()->with([
                    'data' => $response->collect(),
                    'alert' => 'Data sent successfully',201
                ]);
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                $failures = $e->failures();
                $errors = [];
    
                foreach ($failures as $failure) {
                    $errors[] = [
                        'row' => $failure->row(),  
    
                        'attribute' => $failure->attribute(),
                        'errors' => $failure->errors(),
                        // 'alert', 'Error sending data'
                    ];
                }
    
                return response()->json(['errors' => $errors], 422);
            } catch (\Exception $e) {
                return response()->json(['alert' => 'An error occurred,duplicate entry'], 500);
            }
    }
}
