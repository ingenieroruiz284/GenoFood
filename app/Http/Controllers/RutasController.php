<?php namespace App\Http\Controllers;

use Auth;
use DB;

use App\Models\Comensal;
use App\Models\Cocinero;
use App\Models\Repartidor;

use Illuminate\Http\Request; 
class RutasController extends Controller {

	public function index(){ 
		return "";
	}
	public function getIndex(){  
		$data = [];
		$data["comensales"] = Comensal::all();
		$data["cocineros"] = Cocinero::all();
		$data["repartidores"] = Repartidor::all();

		return view('rutas.index',$data);
	}
} 