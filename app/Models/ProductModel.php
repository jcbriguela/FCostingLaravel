<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'product'; // Replace with your actual table name

    protected $fillable = [
        'ItemCode',
        'Description',
        'UOM',
        'Barcode',
    ];
}
