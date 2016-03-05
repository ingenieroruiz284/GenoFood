<?php

use Illuminate\Database\Seeder;

class TableGenotypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genotype')->insert([
            'name' => 'Genotipo 1',
            'description' => 'Cazador'
        ]);

        DB::table('genotype')->insert([
            'name' => 'Genotipo 2',
            'description' => 'Recolector'
        ]);

        DB::table('genotype')->insert([
            'name' => 'Genotipo 3',
            'description' => 'Maestro'
        ]);

        DB::table('genotype')->insert([
            'name' => 'Genotipo 4',
            'description' => 'Explorador'
        ]);

        DB::table('genotype')->insert([
            'name' => 'Genotipo 5',
            'description' => 'Guerrero'
        ]);

        DB::table('genotype')->insert([
            'name' => 'Genotipo 6',
            'description' => 'Nómada'
        ]);
    }
}
