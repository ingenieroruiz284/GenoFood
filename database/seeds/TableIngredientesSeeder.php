<?php

use Illuminate\Database\Seeder;

class TableIngredientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ingrediente')->insert([
            'name' => 'Tomate',
            'descripcion' => 'Tomate rojo de Culiacán'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Tomate',
            'descripcion' => 'Tomate verde de Veracruz'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Pescado',
            'descripcion' => 'Pescado Veracruzano Tilapia'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Café',
            'descripcion' => 'Café de Coatepec'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Frijol',
            'descripcion' => 'Frijolitoooos!!!!!!'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Lechuga',
            'descripcion' => 'Lechuguita rica!!!!!!'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Lechuga',
            'descripcion' => 'Luchuga producida en Puebla!!!!!!'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Plátano',
            'descripcion' => 'Roatán'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Atún',
            'descripcion' => 'Atún aleta amarilla aceite'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Atún',
            'descripcion' => 'Atún aleta amarilla agua'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Pasta',
            'descripcion' => 'Coditos'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Pasta',
            'descripcion' => 'Espagueti'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Pan',
            'descripcion' => 'Del panadero del barrio'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Pan dulce',
            'descripcion' => 'De caja'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Azucar',
            'descripcion' => 'Morena'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Azucar',
            'descripcion' => 'Glass'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Papaya',
            'descripcion' => '...'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Zanahoria',
            'descripcion' => '...'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Melón',
            'descripcion' => '...'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Sandía',
            'descripcion' => '...'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Pollo',
            'descripcion' => '...'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Carne roja',
            'descripcion' => '...'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Limón',
            'descripcion' => '...'
        ]);

        DB::table('ingrediente')->insert([
            'name' => 'Naranja',
            'descripcion' => '...'
        ]);
    }
}
