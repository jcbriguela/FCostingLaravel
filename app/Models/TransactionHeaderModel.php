<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeaderModel extends Model
{
    use HasFactory;

    protected $table = 'transactionheader'; // Replace with your actual table name

    protected $fillable = [
        'TransactionType',
        'ReceivingDate ',
        'ReceivedById',
    ];
}
