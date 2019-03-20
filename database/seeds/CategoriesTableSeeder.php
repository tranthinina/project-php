<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
            DB::table('categories')->insert(
                [
                    'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                    'parent_id' => rand(0, 10),
                    'slug' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'image' => $faker->imageUrl($width = 640, $height = 480),
                ]);
        }
    }
}
