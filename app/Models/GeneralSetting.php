<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $fillable = [
        'address',
        'phone',
        'gmail',
        'facebook',
        'instagram',
        'whatsapp',
    ];
}
