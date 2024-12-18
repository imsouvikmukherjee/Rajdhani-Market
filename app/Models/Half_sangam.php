<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Half_sangam extends Model
{
    use HasFactory;
    protected $table = 'half_sangam';
    protected $fillable = ['date', 'session', 'market_name', 'game_name', 'username','email','contact', 'open_digit', 'close_digit', 'open_pana', 'close_pana', 'points'];


}
