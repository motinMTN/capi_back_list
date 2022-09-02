<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserDomicilio;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100)->create()->each(function($user) {
            UserDomicilio::factory(2)->create();
        });
    }
}
