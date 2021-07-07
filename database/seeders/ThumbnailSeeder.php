<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Thumbnail;


class ThumbnailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thumbnail::create([
            'name' => 'Black Mulch Mix 1/2',
            'url' => '/storage/products/Black-Mulch-Mix-1;2---1.jpg',
        ]);
        Thumbnail::create([
            'name' => 'Brown Mulch Mohamy',
            'url' => '/storage/products/Brown-Mulch-Mohamy-2.jpg',
        ]);
        Thumbnail::create([
            'name' => 'Concrete Mix 60 lb bags',
            'url' => '/storage/products/Concrete-Mix-60-lb-bags.jpg',
        ]);
        Thumbnail::create([
            'name' => 'Organic Planter Mix',
            'url' => '/storage/products/Organic-Planter-Mix.jpg',
        ]);
        Thumbnail::create([
            'name' => 'Pea Gravell',
            'url' => '/storage/products/Pea-Gravell.jpg',
        ]);
        Thumbnail::create([
            'name' => 'Play Sand Bags',
            'url' => '/storage/products/Play-Sand-Bags.jpg',
        ]);
        Thumbnail::create([
            'name' => 'Red Mulch  1/2 Mix',
            'url' => '/storage/products/Red-Mulch--1-2--1--Mix.jpg',
        ]);
        Thumbnail::create([
            'name' => 'Redwood Bark Mulch Mix 1 - 2',
            'url' => '/storage/products/Redwood-Bark-Mulch-Mix-1---2.jpg',
        ]);
        Thumbnail::create([
            'name' => 'Shreded Bark Mulch',
            'url' => '/storage/products/Shreded-Bark-Mulch.jpg',
        ]);
        Thumbnail::create([
            'name' => 'Sucullent Mix : Potting Mix',
            'url' => '/storage/products/Sucullent-Mix-Potting-Mix.jpg',
        ]);
    }
}
