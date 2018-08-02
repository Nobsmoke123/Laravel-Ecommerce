<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id','quantity','product_id','product_name','product_image','price','discounted_price'];

    public function user(){
        $this->belongsTo(User::class);
    }
}
