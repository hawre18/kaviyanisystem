<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }

    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }

    public function attributeGroups(){
        return $this->belongsToMany(AttributeGroup::class,'attributeGroup_category','category_id','attributeGroup_id');
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
    public function products(){
        return $this->belongsToMany(Product::class, 'category_product','category_id','product_id');
    }
}
