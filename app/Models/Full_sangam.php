<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Full_sangam extends Model
{
    use HasFactory;
    protected $table = 'full_sangam';
    protected $fillable = [
        'date',
        // 'session',
        'market_name', 'game_name', 'username','email',
        'open_pana',
        'closed_pana',
        'points'

    ];
}
