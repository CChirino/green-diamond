<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Products;


class Products_t extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'product_name' => 'Black Mulch Mix 1/2',
            'product_slug' => 'black-mulch-mix',
            'price' => 38,
            'description' => 'Black Mulch Mix 1/2',
            'sku' => 'LM-05',
            'file' => 'Black-Mulch-Mix-1;2---1.jpg',
            'categories_id' => 1,
        ]);
        Products::create([
            'product_name' => 'Brown Mulch Mohamy',
            'product_slug' => 'brown-mulch-mohamy',
            'price' => 0,
            'description' => 'Brown Mulch Mohamy',
            'sku' => 'LM-06',
            'file' => 'Brown-Mulch-Mohamy-2.jpg',
            'categories_id' => 1,
        ]);
        Products::create([
            'product_name' => 'Concrete Mix 60 lb bags',
            'product_slug' => 'concrete-mix-60',
            'price' => 0,
            'description' => 'Concrete Mix 60 lb bags',
            'sku' => 'LM-04',
            'file' => 'Concrete-Mix-60-lb-bags.jpg',
            'categories_id' => 1,
        ]);
        Products::create([
            'product_name' => 'Organic Planter Mix',
            'product_slug' => 'organic-planter-mix',
            'price' => 0,
            'description' => 'Organic Planter Mix',
            'sku' => 'LM-01',
            'file' => 'Organic-Planter-Mix.jpg',
            'categories_id' => 1,
        ]);
        Products::create([
            'product_name' => 'Pea Gravell',
            'product_slug' => 'pea-gravell',
            'price' => 0,
            'description' => 'Pea Gravell',
            'sku' => 'LM-11',
            'file' => 'Pea-Gravell.jpg',
            'categories_id' => 1,
        ]);
        Products::create([
            'product_name' => 'Play Sand Bags',
            'product_slug' => 'play-sand-bags',
            'price' => 0,
            'description' => 'Play Sand Bags',
            'sku' => 'LM-02',
            'file' => 'Play-Sand-Bags.jpg',
            'categories_id' => 1,
        ]);
        Products::create([
            'product_name' => 'Red Mulch  1/2 Mix',
            'product_slug' => 'red-mulch-mix',
            'price' => 0,
            'description' => 'Red Mulch  1/2 Mix',
            'sku' => 'LM-07',
            'file' => 'Red-Mulch--1-2--1--Mix.jpg',
            'categories_id' => 1,
        ]);
        Products::create([
            'product_name' => 'Redwood Bark Mulch Mix 1 - 2',
            'product_slug' => 'redwood-bark-mix',
            'price' => 82,
            'description' => 'Redwood Bark Mulch Mix 1 - 2',
            'sku' => 'LM-08',
            'file' => 'Redwood-Bark-Mulch-Mix-1---2.jpg',
            'categories_id' => 1,
        ]);
        Products::create([
            'product_name' => 'Shreded Bark Mulch',
            'product_slug' => 'shreded-bark-mulch',
            'price' => 42,
            'description' => 'Shreded Bark Mulch',
            'sku' => 'LM-09',
            'file' => 'Shreded-Bark-Mulch.jpg',
            'categories_id' => 1,
        ]);
        Products::create([
            'product_name' => 'Sucullent Mix : Potting Mix',
            'product_slug' => 'sucullent-mix-potting-mix',
            'price' => 0,
            'description' => 'Sucullent Mix : Potting Mix',
            'sku' => 'LM-04',
            'file' => 'Sucullent-Mix-Potting-Mix.jpg',
            'categories_id' => 1,
        ]);
    }
}
