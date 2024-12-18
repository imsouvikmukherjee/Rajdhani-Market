<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $table ='bid_histories';

    protected $fillable = [
                'marketname',
                'gamename',
                'digit',
                'amount',
                'date',
                'session',
                'username',
                'contact',
                'email',
                
    ];
}
