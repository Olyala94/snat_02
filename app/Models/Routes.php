<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    protected $fillable = [
        'slug',
        'amp',
        'is_active',
        'meta_information',
        'lang',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'meta_information' => 'object',
    ];
}
