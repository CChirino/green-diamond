<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product_Category;


class ProductsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_Category::create([
            'category_id' =>  '1',
            'product_id' =>  '1'
        ]);
    }
}
