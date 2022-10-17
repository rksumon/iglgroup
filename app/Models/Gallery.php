<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $softDelete = true;

    public function years(){
        return $this->hasMany(Year::class);
    }
}
