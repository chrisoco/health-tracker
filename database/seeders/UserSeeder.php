<?php

namespace Database\Seeders;

use App\Models\Smoke;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create default admin account
        User::factory(['email' => 'admin@admin.ch'])
            ->has(Smoke::factory(200))
            ->create();

        // create 3x random admin accounts
        User::factory()
            ->count(3)
            ->has(Smoke::factory(200))
            ->create();
    }
}
