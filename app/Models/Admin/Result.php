<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $table = 'results';

protected $fillable = [
    'market',
    'date',
    'session',
    'open_pana',
    'open_result',
    'close_pana',
    'close_result',
   
];
}
