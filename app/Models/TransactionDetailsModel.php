<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetailsModel extends Model
{
    use HasFactory;
    protected $table = 'transactiondetails'; // Replace with your actual table name

    protected $fillable = [
        'TransactionHeaderID',
        'ItemCode',
        'PO_QTY',
        'REC_QTY',
        'RECUserID',
    ];

    public function transactionHeader()
    {
        return $this->belongsTo(TransactionHeaderModel::class);
    }
}
