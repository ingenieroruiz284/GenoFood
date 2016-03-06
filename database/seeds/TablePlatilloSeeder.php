<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TablePlatilloSeeder extends Seeder
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
        for ($i = 1; $i <= 20; $i++) {

            $randElement = $faker->numberBetween(2, 4);

            $ingredientes_json = '[{';
            $ingredientes_json .= '"ingredientes": [';
            for ($k = 0; $k < $randElement; $k++) {
                $ingredientes_json .= $faker->numberBetween(1, 24) . ',';
            }
            $ingredientes_json .= $faker->numberBetween(1, 24);
            $ingredientes_json .= ']}]';

            DB::table('platillo')->insert([
                'ingredientes_json' => $ingredientes_json,
                'descripcion_corta' => ('Platillo ' . $i)
            ]);
        }
    }
}