<?php

use Faker\Generator as Faker;
use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      
        for ($i = 0; $i < 80; $i++) {
            $_product = new Product();
            $_product->name = $faker->sentence();
            $_product->detail = $faker->paragraph();
            $_product->save();
        }
    }
}
