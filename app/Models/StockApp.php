<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockApp extends Model
{
    protected $fillable = [
        'base_url',
        'admin_email',
        'admin_password',
        'close_url',
        'open_url',
        'last_ping',
    ];

    protected $casts = [
        'last_ping' => 'datetime',
    ];
}
