<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TableMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        for ($i = 1; $i <= 30; $i++) {
            DB::table('menu')->insert([
                'name' => ('Menu ' . $i),
                'platillo1_id' => $faker->numberBetween(1, 20),
                'platillo2_id' => $faker->numberBetween(1, 20),
                'platillo3_id' => $faker->numberBetween(1, 20),
                'bebida_id' => 1 // agua simple XD hahahahahahahahaha
            ]);
        }
    }
}
