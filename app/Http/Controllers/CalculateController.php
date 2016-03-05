<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\UserGenotype;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Faker\Factory as Faker;

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

        return response()->json(array('success' => true, 'genotype' => $genotype));
    }
}
