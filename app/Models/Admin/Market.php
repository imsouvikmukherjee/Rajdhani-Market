<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    
protected $table = 'markets';

protected $fillable = [
    'name',
    'result',
    'url',
    'start_time',
    'close_time',
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
   'saturday',
   'sunday,'
];
}
