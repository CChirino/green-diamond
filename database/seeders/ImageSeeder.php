<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Image;


class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'name' => 'Black Mulch Mix 1/2',
            'url' => '/storage/products/Black-Mulch-Mix-1;2---1.jpg',
        ]);
        Image::create([
            'name' => 'Brown Mulch Mohamy',
            'url' => '/storage/products/Brown-Mulch-Mohamy-2.jpg',
        ]);
        Image::create([
            'name' => 'Concrete Mix 60 lb bags',
            'url' => '/storage/products/Concrete-Mix-60-lb-bags.jpg',
        ]);
        Image::create([
            'name' => 'Organic Planter Mix',
            'url' => '/storage/products/Organic-Planter-Mix.jpg',
        ]);
        Image::create([
            'name' => 'Pea Gravell',
            'url' => '/storage/products/Pea-Gravell.jpg',
        ]);
        Image::create([
            'name' => 'Play Sand Bags',
            'url' => '/storage/products/Play-Sand-Bags.jpg',
        ]);
        Image::create([
            'name' => 'Red Mulch  1/2 Mix',
            'url' => '/storage/products/Red-Mulch--1-2--1--Mix.jpg',
        ]);
        Image::create([
            'name' => 'Redwood Bark Mulch Mix 1 - 2',
            'url' => '/storage/products/Redwood-Bark-Mulch-Mix-1---2.jpg',
        ]);
        Image::create([
            'name' => 'Shreded Bark Mulch',
            'url' => '/storage/products/Shreded-Bark-Mulch.jpg',
        ]);
        Image::create([
            'name' => 'Sucullent Mix : Potting Mix',
            'url' => '/storage/products/Sucullent-Mix-Potting-Mix.jpg',
        ]);
    }
}
