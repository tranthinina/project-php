<?php

use Illuminate\Database\Seeder;

class Order_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i < 10; $i++) {
            DB::table('order_details')->insert(
                [
                    'discount' => sentence($nbWords = 6, $variableNbWords = true),
                    'order_id' => rand(0, 10),
                    'parent_id' => rand(0, 10),
                    'price' => sentence($nbWords = 6, $variableNbWords = true),
                    'quatity' => sentence($nbWords = 6, $variableNbWords = true),
                    'subtotal' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                ]);
        }
    }
}
