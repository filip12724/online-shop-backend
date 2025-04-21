<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\ProductDiscount;

class Discount extends Model
{
    /** @use HasFactory<\Database\Factories\DiscountFactory> */
    use HasFactory;
    public function products(){
        return $this->belongsToMany(Product::class,'product_discounts')
                    ->using(ProductDiscount::class);
    }
   
}
