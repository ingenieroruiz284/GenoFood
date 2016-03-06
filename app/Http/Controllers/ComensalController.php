<?php namespace App\Http\Controllers;

use Auth;
use DB;

use App\Alumno; 
use App\Models\Comensal;
use App\Models\GenotypeMenu;
use App\Models\Platillo;


use Illuminate\Http\Request; 
class ComensalController extends Controller {

	public function index(){ 
		return "";
	}
	public function getIndex(){  
		$data = [];
		$data["comensales"] = Comensal::all();
		return view('catalogs.comensal.list',$data);
	}
	public function getList(){ 
		$data = [];
		$data["comensales"] = Comensal::all();
		return view('catalogs.comensal.list',$data);
	}    
	public function getAdd(){ 
		return view('catalogs.comensal.add');
	}  
	public function postAddws(){ 
	    $comensal = new Comensal(\Request::all());
	    
	    $genotipo = array("1", "2", "3", "4", "5" , "6");
		shuffle($genotipo);
		$comensal->genotipo = $genotipo[0];
	    $comensal->save();
	    
	    $menus = GenotypeMenu::select('menu.id as menu_id', 'menu.name as menu_name', 'menu.platillo1_id as p1', 'menu.platillo2_id as p2', 'menu.platillo3_id as p3')
            ->join('menu', 'menu.id', '=', 'menu_genotype.menu_id')
            ->where('menu_genotype.genotype_id', '=', $comensal->genotipo)
            ->get();
        $response = [];
        foreach ($menus as $menu) {
        	$elemento = new \stdClass();
            $elemento->platillo_1 = Platillo::where('id', '=', $menu->p1)->first();
            $elemento->platillo_2 = Platillo::where('id', '=', $menu->p2)->first();
            $elemento->platillo_3 = Platillo::where('id', '=', $menu->p3)->first();
            $response[] = $elemento;
        }


		return \Redirect::to('/section/gracias/?genotipo='.$comensal->genotipo."&menu=".json_encode($response));
	}  
 
} 