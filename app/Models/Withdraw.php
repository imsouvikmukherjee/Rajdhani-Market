<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    protected $table = 'withdraw';

    protected $fillable = [
        'name',
        'number',
        'balance',
        'amount',
        'account',
        'ifsc_code',
        'branch',
        'bank_name',
        'accounts_holder_name',
        'phonepe',
        'google_pay',
        'paytm',
        'date',
        'approval_date',
        'approval_time',
        'status',

    ];
}
