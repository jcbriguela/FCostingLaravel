<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $formData = $request->all();
        $formData = [
            'UploadFile' => "ManuallyAdded",
            'ProductCode' => $request->ProductCode,
            'InsysProductId' => $request->InsysProductId,
            'InsysProductCode' => $request->InsysProductCode,
            'Barcode' => $request->Barcode,
            'Name' => $request->Name,
            'Cost' => $request->Cost,
            'Price' => $request->Price,
            'isMarkDown' => $request->isMarkDown,
            'categoryId' => $request->categoryId,
            'modelId' => $request->modelId,
            'Remarks' => $request->Remarks,
        ];

         $baseUrl = env('APP_URL');
         $apiUrl = $baseUrl . '/api/product/new/';

         $bearerToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwODAvYXBpL3JlZ2lzdGVyIiwiaWF0IjoxNzIyNDk4NzMyLCJleHAiOjE3MjI1MDIzMzIsIm5iZiI6MTcyMjQ5ODczMiwianRpIjoiSUFxZnVrTVBCRlIzZ0JqZyIsInN1YiI6IjMiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.FPVfGfI7r2nFvJpenB1QhW4cMqO8yZhoYchiJ6HU5HM';
         try{
         $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
                'Content-Type' => 'application/json',
            ])->post($apiUrl, json_encode($formData));
            
            if ($response->ok()) {
                // Handle successful response
                return redirect()->back()->with('alert', 'Data sent successfully');
            } else {
                // Handle error response
                return redirect()->back()->with('alert', 'Error sending data');
            }

    } catch (\Exception $e) {
        // Handle the error
        Log::error('Error sending request: ' . $e->getMessage());
        return response()->json(['error' => 'Error sending data'], 500);
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
         //**FROM API */
        // $baseUrl = env('APP_URL');
        // $apiUrl = $baseUrl . '/api/uploadproduct/checkid/'.$id;

        // Make an HTTP request to the external API (optional)
        // $apiResponse = Http::get($apiUrl);
        // $apiData = $apiResponse->json();
        // return response()->json($apiData);

        $buttonValue = $request->input('buttonValue');
        $jsonData = collect(DB::select('CALL SP_PRODUCT_FILEUPLOAD(?)', [$buttonValue]));
        return response()->json($jsonData);
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
        // Validate the incoming data
        $validatedData = $request->validate([
            'ProductCode' => 'required|string',
            'name' => 'required|string',
           
        ]);

        // Find the record to update
        $record = Model::findOrFail($validatedData['id']);

        // Update the record
        $record->update($validatedData);

        // Return a success response
        return response()->json(['message' => 'Record updated successfully']);
        }

        public function updateStatus(Request $request)
        {
            $status = $request->input('status');
            $recordId = $request->input('recordId');

            // $record = Model::find($recordId);
            $record = DB::table('uplproduct')
            ->where('UploadFile', $recordId)
            ->first();
            if (!$record) {
                return response()->json(['message' => 'Record not found'], 404);
            }
        try {
            $updated = DB::table('uplproduct')
                ->where('UploadFile', $recordId)
                ->update([
                    'Status' => $status,
                    'isApproved' => $status,
                ]);
            
        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Record updated successfully']);
        } else {
            return response()->json(['success' => false,'message' => 'Update failed'], 500);
        }
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
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
}
