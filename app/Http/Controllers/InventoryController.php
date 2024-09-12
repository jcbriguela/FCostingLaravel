<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TransactionHeaderModel;
use App\Models\Branch;
use App\Models\User;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $list = DB::SELECT("Select b.name as Branch,c.name as RName,a.CreatedDate as Date,a.Status as Stat FROM transactionheader a LEFT JOIN branch b ON a.branchID = b.id LEFT JOIN users c ON a.ReceivedById = c.id  GROUP BY a.ReceivedById ");
        
        
       
        // // Retrieve data from TransactionHeader model
        // $query = TransactionHeaderModel::query();
        
        // // Apply left joins to Branch and User models
        // $query->leftJoin('branch AS b', 'a.branchId', '=', 'b.id')
        //      ->leftJoin('users AS c', 'a.ReceivedById', '=', 'c.id');
        
        // // Select specific columns from each table
        // $query->select([
        //     'b.Name AS Branch',
        //     'c.name AS Name', // Assuming 'name' exists in User model
        //     'CreatedDate AS Date' ,
        // ]);
        
        // // Execute the query and get the results
        // $results = $query->get();
        //dd($list);

        $list = DB::table('transactionheader AS a')
        ->select([
            'a.id AS TractId',  
            'b.name AS Branch',
            'c.name AS RName',
            'a.CreatedDate AS Date',
            'a.Status AS Stat',
        ])
        ->leftJoin('branch AS b', 'a.branchID', '=', 'b.id')
        ->leftJoin('users AS c', 'a.ReceivedById', '=', 'c.id')
       // ->groupBy('a.ReceivedById')
        ->get();
        return view('Prototype.Inventory.ApprovalList',compact('list'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $ascending = "1"; // Default to ascending order
        $branchId = auth()->user()->branchid; // Default to ascending order
        // Call the stored procedure
        $data = DB::select("CALL SP_GET_RECEIVINGITEMS_HEADERID(?,?)", [$id,$ascending]); 

        // $data = DB::table('transactiondetails as a')
        // ->leftJoin('productmasterfile as b', 'a.ItemCode', '=', 'b.InventoryId')
        // ->leftJoin('settings as c', 'b.UOM', '=', 'c.id')
        // ->select('a.*', 'b.*','c.*') // Select all columns from both tables
        // ->where('a.TransactionHeaderId', $id) // Filter based on provided or request ID
        // ->get(); 

        // dd($data);
        return view('Prototype.Inventory.InventoryList',compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
}
