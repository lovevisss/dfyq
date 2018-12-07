<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Factory as Faker;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        $faker = Faker::create();
        foreach (range(1,10) as $index)
        {

            Product::create([
                'name' => $faker->name(),
                'range_id' => 1,
                'is_airless' => true,
                // 'password' => Hash::make('tutsplus'),
            ]);
        }
    }
}
