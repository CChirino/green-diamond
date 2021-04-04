<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Categories;


class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
             'category_name' => 'Landscape-Materials',
             'category_slug' => 'landscape',
         ]);
         Categories::create([
            'category_name' => 'Premiun Synthetic TURF',
            'category_slug' => 'synthetic-turf',
        ]);
        Categories::create([
            'category_name' => 'Garden Tools',
            'category_slug' => 'garden-tools',
        ]);
        Categories::create([
            'category_name' => 'Redwoods Materials',
            'category_slug' => 'redwoods',
        ]);
        Categories::create([
            'category_name' => 'Irrigation Materials',
            'category_slug' => 'irrigation',
        ]);
        Categories::create([
            'category_name' => 'Lighting Materials',
            'category_slug' => 'lighting',
        ]);
        Categories::create([
            'category_name' => 'General Services',
            'category_slug' => 'general-services',
        ]);
    }
}
