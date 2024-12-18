<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upi extends Model
{
    protected $table = 'upi';
    use HasFactory;
    protected $fillable = ['phonepay', 'paytm', 'googlepay', 'scanner'];
}
