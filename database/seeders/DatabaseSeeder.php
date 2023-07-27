<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
//        User::factory( 10 )->create();
//        Product::factory( 20 )->create();
//        Category::factory( 5 )->create();
//        Brand::factory( 4 )->create();
        Flight::factory( 5 )->create();
    }
}
