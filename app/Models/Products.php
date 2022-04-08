<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use App\Models\ProductsGallery;
use App\Models\ProductsAttributes;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function categories(){
        return $this->belongsToMany(
            Categories::class,
            'products_categories',
            'product_id',
            'category_id'
        );
    }

    public function galleries(){
        return $this->hasMany(
            ProductsGallery::class,
            'product_id',
            'id'
        );
    }

    public function attributes(){
        return $this->hasMany(
            ProductsAttributes::class,
            'product_id',
            'id'
        );
    }
}
