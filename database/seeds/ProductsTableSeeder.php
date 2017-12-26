<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Product::class, 100)->create();
        factory(ProductImage::class, 100)->create();
    }
}
