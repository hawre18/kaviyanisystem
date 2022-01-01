<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function image(){
        return $this->belongsTo(Image::Class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}
