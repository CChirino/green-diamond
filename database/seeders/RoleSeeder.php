<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Roles;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create([
            'name' => 'Super Administrator',
            'description' => 'Support',
            'full-access' => 'yes'
        ]);

        Roles::create([
            'name' => 'Administrator',
            'description' => 'Store Manager',
            'full-access' => 'no'
        ]);

        Roles::create([
            'name' => 'Supervisor',
            'description' => 'Store Supervisor',
            'full-access' => 'no'
        ]);

        Roles::create([
            'name' => 'Seller',
            'description' => 'Seller Store',
            'full-access' => 'no'
        ]);

        Roles::create([
            'name' => 'Delivery',
            'description' => 'Delivery Tienda',
            'full-access' => 'no'
        ]);
    }
}
