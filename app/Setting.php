<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['coupon','dollar_to_naira','euro_to_naira','vat'];
}
