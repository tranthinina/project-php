<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
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
                    'user_id' => rand(0, 10),
                    'rating' => sentence($nbWords = 6, $variableNbWords = true),
                    'conment' => sentence($nbWords = 6, $variableNbWords = true),
                ]);
        }
    }
}
