<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

// Import class
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\Import;

class ImportMetadata implements ToCollection,ToModel, WithHeadingRow
{

    protected $importId;

    public function __construct($importId)
    {
        $this->importId = $importId;
    }

    public function model(array $row)
    {
        // Your data mapping logic here
        return new YourModel([
            'import_id' => $this->importId,
            'ProductCode' => $row[0],
            'InsysProductId' => $row[1],
            'InsysProductCode' => $row[2],
            'Barcode' => $row[3],
            'Name' => $row[4],
            'Cost' => $row[5],
            'Price' => $row[6],
             'isMarkDown' => $row[7],
             'categoryId' => $row[8],
             'modelId' => $row[9],

        ]);
    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }
}
