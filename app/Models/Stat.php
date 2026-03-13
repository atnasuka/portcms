<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    protected $fillable = [
        'value',
        'label',
        'order_no',
        'is_active',
    ];
}