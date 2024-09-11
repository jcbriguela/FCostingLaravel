<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        // $SetName = "RawMats_Cat_PR"; // Default to ascending order
        // $module = "Category"; // Default to ascending order
        // $OrderByValue = 0; // Default to ascending order
        // // Call the stored procedure
        // $data = DB::select('CALL SP_SELECT_SETTINGS(?, ?, ?)', [$SetName,$module, $OrderByValue]);
        // $list = DB::select('CALL SP_SELECT_SETTINGS(?, ?, ?)', [$SetName,$module, $OrderByValue]);

        $module = DB::table('settings')
        ->select('Module') // Select all columns from both tables
        ->groupby('Module') // Filter based on provided or request ID
        ->get(); 
        $data = DB::table('settings')
        ->select('*') // Select all columns from both tables
        ->get(); 

        return view('Prototype.References.Masterfile',compact('module','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            // Extract data from the validated request
            $data = $request->all();
            $SettingName = $data['SettingName'];
            $Module = $data['Module'];
            $ValueText = $data['ValueText'];
            $Description = $data['Description'];
            // $CreatedUserBy = auth()->user()->id;
            $Remarks = $data['Remarks'];

            $results = DB::select('CALL SP_INSERT_SETTINGS(?, ?, ?, ?, ?, ?)', [
                $SettingName,
                $Module,
                $ValueText,
                $Description,
                auth()->user()->id,
                $Remarks
            ]);
            
            // Check if the stored procedure was executed successfully
            if ($results) {
                return redirect()->back()->with('success', 'Data saved successfully!');

                // The stored procedure was executed successfully
                // You can handle any return values or messages here
            } else {

            // dd("error");
            return redirect()->back()->withErrors(['error' => 'An error occurred while saving the data. Please try again.']);
                // An error occurred while executing the stored procedure
                // Handle the error appropriately
            }
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $module = $request->input('module');
        $asc = "1";
        // Perform your search logic using the $module value
        // ...
        $data = DB::select('CALL SP_SELECT_SETTINGS_MODULE(?, ?)', [$module,$asc]);
//dd($data);

        // Return the search results or any other response
        return response()->json($data);
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
