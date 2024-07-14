<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = [
        'route_id',
        'title',
        'description',
        'meta_information',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'meta_information' => 'object',
    ];
}
