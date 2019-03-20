<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
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
            DB::table('orders')->insert(
                [
                    'delivery_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                    'status' => sentence($nbWords = 6, $variableNbWords = true),
                    'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                    'shipping_address' => $faker->address,
                    'payment_type' => sentence($nbWords = 6, $variableNbWords = true),
                    'user_id' => rand(0, 10),
                ]);
        }
    }
}
