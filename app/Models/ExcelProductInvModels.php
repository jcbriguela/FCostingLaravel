<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcelProductInvModels extends Model
{
    use HasFactory;
    public $table="uplproduct";
    protected $fillable = ['UploadFile',
                            'ProductCode',
                            'InsysProductId',
                            'InsysProductCode',
                            'Barcode',
                            'Name',
                            'Cost',
                            'Price',
                            'isMarkDown',
                            'categoryId',
                            'modelId',
                            'Remarks'

];

}
