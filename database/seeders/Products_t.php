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
            'title' => 'Black Mulch Mix 1/2',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 38,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'images' => 'Black-Mulch-Mix-1;2---1.jpg',
            // 'categories_id' => 1,
        ]);
        Products::create([
            'title' => 'Brown Mulch Mohamy',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 0,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'images' => 'Brown-Mulch-Mohamy-2.jpg',
            // 'categories_id' => 1,
        ]);
        Products::create([
            'title' => 'Concrete Mix 60 lb bags',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 0,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'images' => 'Concrete-Mix-60-lb-bags.jpg',
            // 'categories_id' => 1,
        ]);
        Products::create([
            'title' => 'Organic Planter Mix',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 0,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'images' => 'Organic-Planter-Mix.jpg',
            // 'categories_id' => 1,
        ]);
        Products::create([
            'title' => 'Pea Gravell',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 0,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'images' => 'Pea-Gravell.jpg',
            // 'categories_id' => 1,
        ]);
        Products::create([
            'title' => 'Play Sand Bags',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 0,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'images' => 'Play-Sand-Bags.jpg',
            // 'categories_id' => 1,
        ]);
        Products::create([
            'title' => 'Red Mulch  1/2 Mix',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 0,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'images' => 'Red-Mulch--1-2--1--Mix.jpg',
            // 'categories_id' => 1,
        ]);
        Products::create([
            'title' => 'Redwood Bark Mulch Mix 1 - 2',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 82,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'images' => 'Redwood-Bark-Mulch-Mix-1---2.jpg',
            // 'categories_id' => 1,
        ]);
        Products::create([
            'title' => 'Shreded Bark Mulch',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 42,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'images' => 'Shreded-Bark-Mulch.jpg',
            // 'categories_id' => 1,
        ]);
        Products::create([
            'title' => 'Sucullent Mix : Potting Mix',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 0,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'images' => 'Sucullent-Mix-Potting-Mix.jpg',
            // 'categories_id' => 1,
        ]);
    }
}
