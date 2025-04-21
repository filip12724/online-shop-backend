<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Discount;
use App\Models\ProductDiscount;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(50)->create();

        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Filip',
            'email' => 'bondzulicfilip@gmail.com',
        ]);

        Discount::factory(20)->create();

        // Attach discounts to products
        $products = Product::all();
        $discounts = Discount::all();

        // For each product, attach 1-3 random discounts
        foreach ($products as $product) {
            $randomDiscounts = $discounts->random(rand(1, 3));
            $product->discounts()->attach($randomDiscounts->pluck('id'));
        }
    }
}
