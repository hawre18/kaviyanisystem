<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function images()
    {
        return $this->belongsToMany(Image::class,'image_product','product_id','image_id');
    }
    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class,'attributevalue_product','product_id','attributeValue_id');
    }
    public function categories(){
        return $this->belongsToMany(Category::class ,'category_product', 'product_id','category_id');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class,'order_product','product_id','order_id');
    }
}
