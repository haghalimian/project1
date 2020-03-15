<?php

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
//        factory(App\Coin::class , 10)->create();
//
//        factory(App\Price::class , 50)->create();

        factory(App\User::class,5)->create();
    }
}
