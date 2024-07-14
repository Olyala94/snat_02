<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    use HasFactory;

    protected $table ='redirects';

    protected $fillable = [
        'old_url',
        'new_url',
        'http_status_code',
    ];
}
