<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TableMenuGenotypeSeeder extends Seeder
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

        for ($i = 1; $i <= 50; $i++) {
            $genotype_id = $faker->numberBetween(1, 6);
            $menu_id = $faker->numberBetween(1, 30);

            $exist = DB::table('menu_genotype')
                ->where('menu_id', '=', $menu_id)
                ->where('genotype_id', '=', $genotype_id)
                ->first();

            // no queremos repetidos
            if (is_null($exist)) {
                DB::table('menu_genotype')->insert([
                    'menu_id' => $menu_id,
                    'genotype_id' => $genotype_id
                ]);
            }
        }
    }
}
