<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TransactionHeaderModel;
use App\Models\ProductModel;
use App\Models\TransactionDetailsModel;
use PDO;
use DataTables;

class ReceivingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $ReceivedById = auth()->user()->id;
    //     $list = DB::table('transactionheader AS a')
    //     ->select([
    //         'a.id AS TractId',  
    //         'b.name AS Branch',
    //         'c.name AS RName',
    //         'a.CreatedDate AS Date',
    //         'a.Status AS Stat',
    //     ])
    //     ->leftJoin('branch AS b', 'a.branchID', '=', 'b.id')
    //     ->leftJoin('users AS c', 'a.ReceivedById', '=', 'c.id')
    //     ->where('a.ReceivedById', $ReceivedById )

    //    // ->groupBy('a.ReceivedById')
    //     ->get();

        $ascending = 1; // Default to ascending order
        $branchId = auth()->user()->branchid;
        // dd($branchId); // Default to ascending order
        // Call the stored procedure
        $module = DB::table('settings')
        ->select('Module') // Select all columns from both tables
        ->groupby('Module') // Filter based on provided or request ID
        ->get(); 

        $Moduledata = DB::table('settings')
        ->select('*') // Select all columns from both tables
        ->get(); 

        $ItemCodelist = DB::table('product')
        ->select('ItemCode') // Select all columns from both tables
        ->groupby('ItemCode') // Filter based on provided or request ID
        ->get(); 


        $data = DB::select("CALL SP_CHECK_RECEIVING_ONLOAD(?, ?)", [$ascending, $branchId]); 

        return view('Prototype.Inventory.Receiving',compact('data','module','Moduledata','ItemCodelist'));
        // return view('Prototype.Inventory.InventoryList');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       // $lastId = YourModel::latest()->value('id'); // Replace 'YourModel' with your actual model
        // Get the session variable
        // $sessionBranch = session()->get('your_session_variable');
        

        // Call the stored procedure with the session variable
       // $result = DB::select('CALL SP_GETLASTTRANSACTIONID(?, ?, ?,?)', ['REC', 1 ,'','']);
      // DB::select("call SP_GETLASTTRANSACTIONID('Rec',1,@outparam1,@outparam2)");
      $sessionBranch = $request->input('sessionBranch');
      $transactionType = $request->input('transactionType');

    //   DB::select("call SP_GETLASTTRANSACTIONID('Rec',1,@outparam1,@outparam2)");
    //   $results = DB::select('select @outparam1 as Out1, @outparam2 as Out2 ');
    //   dd($result);

    try {
        $input_value1 = "REC";
        $input_value2 = 1;
        // // $stmt = DB::prepare("CALL SP_GETLASTTRANSACTIONID(?, ?, ?, ?)");
        // $stmt =  DB::select('CALL SP_GETLASTTRANSACTIONID(?, ?, ?, ?)', ['REC', 1]);
        // // Example usage:
        
        // $stmt->bindParam(1, $input_value1, PDO::PARAM_STR);
        // $stmt->bindParam(2, $input_value2, PDO::PARAM_INT);
        // $stmt->bindParam(3, $output_value1, PDO::PARAM_STR, 4000);
        // $stmt->bindParam(4, $output_value2, PDO::PARAM_INT);
    
        // $stmt->execute();
    
        // $output_value1 = $stmt->fetchColumn();
        // $output_value2 = $stmt->fetchColumn();
    
        // echo "Output value 1: " . $output_value1 . PHP_EOL;
        // echo "Output value 2: " . $output_value2 . PHP_EOL;

        $input1 = 'REC';
        $input2 = 1;
        $output1 = null;
        $output2 = null;
        
        DB::select('CALL SP_GETLASTTRANSACTIONID(?, ?, ?, ?)', [
            PDO::PARAM_STR => $input1,
            PDO::PARAM_INT => $input2,
            PDO::PARAM_INPUT_OUTPUT => $output1,
            PDO::PARAM_INPUT_OUTPUT => $output2,
        ]);
        // Access the output values
        echo $output1;
        echo $output2;

    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }

       // $results = DB::select('select @outparam1 as Out1, @outparam2 as Out2 ');
        //  $result = DB::select('CALL SP_GETLASTTRANSACTIONID(?, ?)', [$transactionType, $sessionBranch]);


       // Extract the date from the result (adjust based on your stored procedure's output)
        // $LastTransactionNo = $result[0]->date_column; // Replace 'date_column' with the actual column name in your stored procedure
   
        return response()->json(['result' => $result]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // Validate the form data if needed
    // $validatedData = $request->validate([
    //    // 'ReceivingDate ' => 'required|array',
    //     'ItemCode' => 'required|array',
    //     'Description' => 'required|array',
    //     'PO_QTY' => 'required|array',
    //     'REC_QTY' => 'required|array',
    //     'UOM' => 'required|array',
    //     'Barcode' => 'required|array',
    //     'Discrepancy' => 'required|array',
    //     // ... other validation rules
    // ]);

   // dd(session()->all());
  // dd($request->input());

  //Laravel Saving
    // Create a new transaction header model instance
    // $transactionHeaderModel = new TransactionHeaderModel;
    // $transactionHeaderModel->TransactionType = 'REC';

    // // Check if ReceivingDate is present in the request and access it using a default value if empty
    // $transactionHeaderModel->ReceivingDate = $request->input('ReceivingDate', null)[0];
    // $transactionHeaderModel->ReceivedById = auth()->user()->id;
    // $transactionHeaderModel->BranchId = auth()->user()->branchid;

    // // Check if data exists based on your criteria (e.g., using a unique constraint)
    // $existingData = $transactionHeaderModel::whereDate('ReceivingDate', $transactionHeaderModel->ReceivingDate)
    //                                     ->where('ReceivedById', $transactionHeaderModel->ReceivedById)
    //                                     ->where('BranchId', $transactionHeaderModel->BranchId)
    //                                     ->first();
    // if (!$existingData) {
    //     // Data doesn't exist, so save it
    //     $transactionHeaderModel->save();
    //     $existingDataId = $existingData->id;
    // } else {
    //     $existingDataId = $existingData->id;
    // }
// dd($existingDataId);
    // // Convert the transactionHeaderModel object to an array
    // $transactionHeaderArray = $transactionHeaderModel->toArray();

    // // Convert the array to a JSON string
    // $jsonString = json_encode($transactionHeaderArray);

// Process the data and save it to the transaction details and product tables

foreach ($request->input('ItemCode') as $index => $itemCode) {
    // // Find or create the product
    // $productModel = ProductModel::firstOrCreate([
    //     'ItemCode' => $itemCode,
    //     'Description' => $request->input('Description')[$index],
    //     'UOM' => $request->input('UOM')[$index],
    //     'Barcode' => $request->input('Barcode')[$index],
    //     'TransactionHeaderID' => $existingDataId,
    // ]);

    // Create a new transaction details model instance and associate it with the header and product
    $transactionDetailsModel = new TransactionDetailsModel;
    // $transactionDetailsModel->TransactionHeaderID = $existingDataId ;
    $transactionDetailsModel->TransactionHeaderID = $request->input('TransactionHeaderID')[$index] ;
    $transactionDetailsModel->ItemCode = $itemCode;
    $transactionDetailsModel->PO_QTY = $request->input('PO_QTY')[$index];
    $transactionDetailsModel->REC_QTY = $request->input('REC_QTY')[$index];
    $transactionDetailsModel->ExpirationDate = $request->input('ExpirationDate')[$index];
    $transactionDetailsModel->RECUserID = auth()->user()->id;
    $transactionDetailsModel->ReceivedById = auth()->user()->id;
    $transactionDetailsModel->save();
   }
// Return a success message or redirect
 return redirect()->back()->with('success', 'Data saved successfully!');

        //SP SAVING

        // $data = $request->all();

        // // Extract data from the request array
        // $TransactionHeaderIDs = $data['TransactionHeaderID'];
        // $itemCodes = $data['ItemCode'];
        // $poQtys = $data['PO_QTY'];
        // $recQtys = $data['REC_QTY'];
        // $expiryDates = $data['ExpirationDate'];
        // $barcodes = $data['Barcode'];
        // $remarks = $data['Remarks'];

        // // Validate the extracted data (optional)

        // // Prepare the data for the stored procedure
        // $params = [];
        // foreach ($TransactionHeaderIDs as $index => $TransactionHeaderID) {
        //     $params[] = [
        //         'TransactionHeaderID' => $TransactionHeaderID,
        //         'ItemCode' => $itemCodes[$index],
        //         'PO_QTY' => $poQtys[$index],
        //         'REC_QTY' => $recQtys[$index],
        //         'RECUserID' => auth()->user()->id,
        //         'ReceivedById' => auth()->user()->id,
        //         'Remarks' => $remarks[$index],
        //     ];
        // }
        // // Convert the params array to a string using json_encode
        // $paramsString = json_encode($params);

        // // Call the stored procedure
        // DB::statement('CALL SP_INSERT_RECEIVINGITEMS(?, ?, ?, ?, ?, ?, ?)', [$paramsString]);

        // // Handle success or failure
        // return redirect()->back()->with('success', 'Data saved successfully!');
    
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function show($id)
        {
            $list = DB::table('transactionheader AS a')
            ->select([
                'a.ReceivingDate AS Rdate',
                'c.ItemCode AS ICode',
                'c.Description AS Descr',
                'b.PO_QTY AS POQty',
                'b.REC_QTY AS RecQty',
                'c.UOM AS UM',
                'c.Barcode AS BCode',
            ])
            ->leftJoin('transactiondetails AS b', function ($join) use ($a) {
                $join->on('a.ReceivedById', '=', 'b.ReceivedById');
                // Additional join conditions here if needed (e.g., 'b.Status' => 'Open')
            })
            ->leftJoin('product AS c', 'b.ItemCode', '=', 'c.ItemCode')
            ->where(function ($query) use ($a) {
                $query->where('a.id', '=', $id);
                $query->where('a.Status', '=', 'REC'); // Ensure case sensitivity
            })
            // ->groupBy('a.ReceivedById') // Include this line if needed for grouping
            ->get();

            dd($list);

            return view('Prototype.Inventory.Receiving',compact('list'));
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'status' => 'required|integer',
            'id' => 'required|integer'
        ]);

        $status = $validatedData['status'];
        $id = $validatedData['id'];
        $remarks ="";
        $ascending ="0";

        try {
           
                $result = DB::select('CALL SP_UPDATE_TRANSACTIONDETAILS_APPROVED(?, ?, ?, ?)', [
                    $id,
                    $status, 
                    auth()->user()->id,
                    $remarks
                ]);

                $updatedData = [];
                if (count($result) > 0) {
                    // dd($result);
                    return response()->json([
                        'message' => $result,
                    ]);
                }

            } catch (Exception $e) {
                // Handle potential database or other errors
                return response()->json(['message' => 'Error updating status: ' . $e->getMessage()], 500);
            }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function indexPO()
    {
        $ascending = 1; // Default to ascending order
        $branchId = auth()->user()->branchid; // Default to ascending order
        // Call the stored procedure
        $data = DB::select("CALL SP_CHECK_RECEIVING_ONLOAD(?, ?)", [$ascending, $branchId]); 
        //dd($data);
        return view('Prototype.Inventory.PurchaseOrder', compact('data'));

    }

   

    public function storePO(Request $request)
    {
        // Extract data from the validated request
        $data = $request->all();
        $TransactionType = $data['TransactionType'];
        $orderDate = now();
        $receivingDate = now();
        $totalItem = $data['TotalItem'];
        $totalqty = $data['TOTALQUANTITY'];
        

         // Call the stored procedure
         $results = DB::select('CALL SP_INSERT_TRANSACTIONHEADER(?, ?, ?, ?, ?, ?, ?,?)', [
            $TransactionType,
            $orderDate,
            $receivingDate,
            $totalItem,
            $totalqty,            
            auth()->user()->id,
            1,
           auth()->user()->branchid,

        ]);

        if ($results) {
            
            $ascending = 1; // Default to ascending order
            $branchId = auth()->user()->branchid; // Default to ascending order
            // Call the stored procedure
            $data = DB::select("CALL SP_CHECK_RECEIVING_ONLOAD(?, ?)", [$ascending, $branchId]); 

            return view('Prototype.Inventory.PurchaseOrder', compact('data'));
        } else {

        // dd("error");
        return redirect()->back()->withErrors(['error' => 'An error occurred while saving the data. Please try again.']);
            // An error occurred while executing the stored procedure
            // Handle the error appropriately
        }
    }
    public function getDropdownData()
    {
        $items = Item::all(); // Replace with your model and query
        return response()->json($items);
    }
    public function fetchItem(Request $request)
    {
        $itemCode = $request->input('selectedItemCode');
        // Perform your search logic using the $module value
        // ...
        $data = DB::table('product')
        ->select('*') // Select all columns from both tables
        ->where('ItemCode',$itemCode) 
        ->get(); 
        if ($data->isEmpty()) {
            // Item not found, handle it appropriately (e.g., return an empty JSON or an error message)
            return response()->json(['message' => 'Item not found']);
        } else {
            // Return the search results
            return response()->json($data);
        }
    }
}
