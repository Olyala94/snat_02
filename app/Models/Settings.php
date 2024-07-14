<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'name',
        'content',
        'lang',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'content' => 'object',
    ];
}
