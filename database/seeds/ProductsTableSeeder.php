<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Product::create([
				'name' => $faker->name,
				'free_shipping' => $faker->randomDigit,
				'description' => $faker->sentence,
				'price' => $faker->randomDigit,
				'category_id' => $faker->randomDigit,
				'created_at' => $faker->dateTimeThisMonth,
				'updated_at' => $faker->dateTimeThisMonth,
            ]);
        }        
    }
}
