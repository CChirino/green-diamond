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
            'thumbnail' => 'Black-Mulch-Mix-1;2---1.jpg',
            'product_id' => 1,
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
            'thumbnail' => 'Brown-Mulch-Mohamy-2.jpg',
            'product_id' => 1,
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
            'thumbnail' => 'Concrete-Mix-60-lb-bags.jpg',
            'product_id' => 1,
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
            'thumbnail' => 'Organic-Planter-Mix.jpg',
            'product_id' => 1,
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
            'thumbnail' => 'Pea-Gravell.jpg',
            'product_id' => 1,
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
            'thumbnail' => 'Play-Sand-Bags.jpg',
            'product_id' => 1,
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
            'thumbnail' => 'Red-Mulch--1-2--1--Mix.jpg',
            'product_id' => 1,
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
            'thumbnail' => 'Redwood-Bark-Mulch-Mix-1---2.jpg',
            'product_id' => 1,
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
            'thumbnail' => 'Shreded-Bark-Mulch.jpg',
            'product_id' => 1,
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
            'thumbnail' => 'Sucullent-Mix-Potting-Mix.jpg',
            'product_id' => 1,
        ]);
    }
}
