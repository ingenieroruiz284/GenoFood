<?php namespace App\Http\Controllers;

use Auth;
use DB;

use App\Models\Comensal;
use App\Models\Cocinero;
use App\Models\Repartidor;

use Illuminate\Http\Request; 
class RepartidorController extends Controller {

	public function index(){ 
		return "";
	}
	public function getIndex(){  
		$data = [];
		$data["comensales"] = Repartidor::all();
		return view('catalogs.repartidor.list',$data);
	}
	public function getList(){ 
		$data = [];
		$data["comensales"] = Repartidor::all();
		return view('catalogs.repartidor.list',$data);
	}    
	public function getAdd(){ 
		return view('catalogs.repartidor.add');
	}  
	public function postAddws(){ 
	    $comensal = new Repartidor(\Request::all());
	    $comensal->save();
		return \Redirect::to('/repartidor/list');
	}  
 
} 