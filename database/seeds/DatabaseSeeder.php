<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,10)->create();
        factory(\App\Model\Product::class,50)->create();
        factory(\App\Model\Review::class,200)->create();
    }
}
