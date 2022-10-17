<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    public function galleries(){
        return $this->hasMany(Gallery::class);
    }
    public function program()
    {
        return $this->hasOne(Program::class);
    }
}
