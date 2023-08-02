<?php

namespace Database\Seeders;

use App\Models\Smoketracker;
use App\Models\User;
use Database\Factories\SmoketrackerFactory;
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
            ->has(Smoketracker::factory(200))
            ->create();

        // create 3x random admin accounts
        User::factory()
            ->count(3)
            ->has(Smoketracker::factory(200))
            ->create();
    }
}
