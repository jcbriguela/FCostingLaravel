<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\ExcelProductInvModels;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ExcelProductInvImports implements ToCollection, ToModel
{
    private $current= 0;
    public $filename;

    /**
    * @param Collection $collection
    */

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function collection(Collection $collection)
    {
       // dd($collection);
    }
    public function model(array $row)
    {
        //dd($row);

        $this->current++;
        if($this->current > 1)
        {

            $ExcelProductInvModels = new ExcelProductInvModels;

                $ExcelProductInvModels->UploadFile = $this->filename;
                $ExcelProductInvModels->ProductCode = $row[0];
                $ExcelProductInvModels->InsysProductId = $row[1];
                $ExcelProductInvModels->InsysProductCode = $row[2];
                $ExcelProductInvModels->Barcode = $row[3];
                $ExcelProductInvModels->Name = $row[4];
                $ExcelProductInvModels->Cost = $row[5];
                $ExcelProductInvModels->Price = $row[6];
                $ExcelProductInvModels->isMarkDown = $row[7];
                $ExcelProductInvModels->categoryId = $row[8];
                $ExcelProductInvModels->modelId = $row[9];
                
            $ExcelProductInvModels->save();

        }
    }
}
