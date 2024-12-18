<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game_type extends Model
{
    use HasFactory;

    protected $table = 'game_types';

protected $fillable = [
    'name',
    'rate',
   
];
}
