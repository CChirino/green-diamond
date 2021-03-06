<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersRoles::class);
        $this->call(RoleSeeder::class);
        $this->call(Category::class);
        $this->call(Products_t::class);

    }
}
