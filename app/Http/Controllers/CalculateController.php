<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\GenotypeMenu;
use App\Models\Platillo;
use App\Models\UserGenotype;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Log;

class CalculateController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('general.calculate');
    }

    public function calculate()
    {
        $form_data = Input::all();

        // calcular genotipo (fake de momento)
        $faker = Faker::create();
        $genotype = $faker->numberBetween(1, 6);

        // obtener al usuario logueado
        $current_user = Auth::user();

        // revisar si ya tiene relacion con su genotipo
        $current_user_genotype = UserGenotype::where('user_id', '=', $current_user->id)->first();

        if (is_null($current_user_genotype)) {
            // guardar la relacion en la db
            $new_relationship = new UserGenotype();
            $new_relationship->user_id = $current_user->id;
            $new_relationship->genotype_id = $genotype;
            $new_relationship->save();
        } else {
            // actualizar el genotipo en la relacion en la db
            $current_user_genotype->genotype_id = $genotype;
            $current_user_genotype->save();
        }

        $this->getMenusForGenotype($genotype);

        return response()->json(array('success' => true, 'genotype' => $genotype));
    }

    public function getMenusForGenotype($genotype_id)
    {
        $menus = GenotypeMenu::select('menu.id as menu_id', 'menu.name as menu_name', 'menu.platillo1_id as p1', 'menu.platillo2_id as p2', 'menu.platillo3_id as p3')
            ->join('menu', 'menu.id', '=', 'menu_genotype.menu_id')
            ->where('menu_genotype.genotype_id', '=', $genotype_id)
            ->get();

        //Log::info('hola1:::'.print_r($menus, true));
        foreach ($menus as $menu) {
            $platillo_1 = Platillo::where('id', '=', $menu->p1)->first();
            // traer sus ingredientes

            //Log::info('hola:::'.print_r($platillo_1, true));
            $json = $platillo_1->ingredientes_json;
            $ingredientes_json = json_decode($json);
            //Log::info(print_r($ingredientes_json, true));
            foreach ($ingredientes_json as $ingrediente) {
                Log::info('id ingrediente: ' . print_r($ingrediente, true));
                $ingrediente = (array) $ingrediente;
                $arr_length = count($ingrediente);

                Log::info($arr_length);
                for($i=0;$i<$arr_length;$i++)
                {
                    //
                }
            }
        }

        /*select menu.name as menu_name, menu.`platillo1_id` as p1 , menu.`platillo2_id` as p2, menu.`platillo3_id` as p3 from `menu_genotype`
inner join menu on menu.id = menu_genotype.menu_id
where `menu_genotype`.genotype_id = 1*/

    }
}
