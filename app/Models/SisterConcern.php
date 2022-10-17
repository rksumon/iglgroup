<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SisterConcern extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'short_description',
        'long_description',
        'url',
    ];


}
