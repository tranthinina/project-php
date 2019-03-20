<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
                    'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'price' => sentence($nbWords = 6, $variableNbWords = true),
                    'discount' => sentence($nbWords = 6, $variableNbWords = true),
                    'stock' => sentence($nbWords = 6, $variableNbWords = true),
                    'category_id' => rand(0, 10),
                    'produce_code' => sentence($nbWords = 6, $variableNbWords = true),
                    'size' => sentence($nbWords = 6, $variableNbWords = true),
                    'image' => $faker->imageUrl($width = 640, $height = 480),
                    'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                    'status' => sentence($nbWords = 6, $variableNbWords = true),
                ]);
        }
    }
}
