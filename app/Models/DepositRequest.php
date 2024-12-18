<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositRequest extends Model
{
    use HasFactory;
    protected $table = 'deposit_request';

    protected $fillable = [
        'deposit_id',
        'name',
        'number',
        'amount',
        'balance',
        'payment_status',
        'payment_method'
        // 'date',
    ];

}
