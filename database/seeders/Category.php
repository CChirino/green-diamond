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
             'category_description' => 'landscape',
         ]);
         Categories::create([
            'category_name' => 'Premiun Synthetic TURF',
            'category_slug' => 'synthetic-turf',
            'category_description' => 'synthetic-turf',
        ]);
        Categories::create([
            'category_name' => 'Garden Tools',
            'category_slug' => 'garden-tools',
            'category_description' => 'garden-tools',
        ]);
        Categories::create([
            'category_name' => 'Redwoods Materials',
            'category_slug' => 'redwoods',
            'category_description' => 'redwoods',
        ]);
        Categories::create([
            'category_name' => 'Irrigation Materials',
            'category_slug' => 'irrigation',
            'category_description' => 'irrigation',
        ]);
        Categories::create([
            'category_name' => 'Lighting Materials',
            'category_slug' => 'lighting',
            'category_description' => 'lighting',

        ]);
        Categories::create([
            'category_name' => 'General Services',
            'category_slug' => 'general-services',
            'category_description' => 'general-services',
        ]);
    }
}
