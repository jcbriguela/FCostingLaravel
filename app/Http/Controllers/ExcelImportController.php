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
       
        // $response = Http::get('http://foodcosting-001-site1.gtempurl.com/api/product/lists?');
        $response = Http::get('localhost:8080/api/product/lists?');
        return view('excel.ImportexcelProductInv',['data'=> $response->collect()]);
    }
    
    public function ImportexcelProductInvPost(Request $request)
    {
    
       $response = Http::get('localhost:8080/api/product/lists?');

       $file = $request->file('excel_file');
       $filename = $file->getClientOriginalName();
       $import = new ExcelProductInvImports($filename);
 

        if (Excel::import($import, $file)) {
            // Handle successful response
            return redirect()->back()->with([
                'data' => $response->collect(),
                'alert' => 'Data sent successfully'
            ]);
        } else {
            // Handle error response
            return redirect()->back()->with('alert', 'Error sending data');
        }
    }
}
