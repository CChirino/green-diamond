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
             'name' => 'Landscape-Materials',
             'slug' => 'landscape',
         ]);
         Categories::create([
            'name' => 'Premiun Synthetic TURF',
            'slug' => 'synthetic-turf',
        ]);
        Categories::create([
            'name' => 'Garden Tools',
            'slug' => 'garden-tools',
        ]);
        Categories::create([
            'name' => 'Redwoods Materials',
            'slug' => 'redwoods',
        ]);
        Categories::create([
            'name' => 'Irrigation Materials',
            'slug' => 'irrigation',
        ]);
        Categories::create([
            'name' => 'Lighting Materials',
            'slug' => 'lighting',
        ]);
        Categories::create([
            'name' => 'General Services',
            'slug' => 'general-services',
        ]);
    }
}
