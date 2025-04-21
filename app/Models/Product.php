<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Discount;
use App\Models\ProductDiscount;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    public function discounts(){
        return $this->belongsToMany(Discount::class,'product_discounts')
                    ->using(ProductDiscount::class);   
    }
}
