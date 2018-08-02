<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Searchable;

    protected $fillable = [
        'name',
        'category_id',
        'slug',
        'quantity',
        'description',
        'details',
        'price',
        'discounted_price',
        'product_image',
        'sub_image_1',
        'sub_image_2',
        'sub_image_3'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function searchableAs(){
        return 'name';
    }
    
}
