<?php

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
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
            DB::table('banners')->insert(
                [
                    'product_id' => rand(0, 10),
                    'image' => $faker->imageUrl($width = 640, $height = 480),
                ]);
        }
    }
}
