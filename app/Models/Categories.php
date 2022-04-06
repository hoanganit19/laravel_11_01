<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function categories(){
        return $this->hasMany(Categories::class, 'parent_id', 'id');
    }

    public function childrenCategories()
    {
        return $this->hasMany(Categories::class, 'parent_id', 'id')->with('categories');
    }

    public function products(){
        return $this->belongsToMany(
            Products::class,
            'products_categories',
            'category_id',
            'product_id'
        );
    }

}
