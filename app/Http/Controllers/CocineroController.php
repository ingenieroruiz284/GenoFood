<?php namespace App\Http\Controllers;

use Auth;
use DB;

use App\Models\Comensal;
use App\Models\Cocinero;

use Illuminate\Http\Request; 
class CocineroController extends Controller {

	public function index(){ 
		return "";
	}
	public function getIndex(){  
		$data = [];
		$data["comensales"] = Cocinero::all();
		return view('catalogs.cocinero.list',$data);
	}
	public function getList(){ 
		$data = [];
		$data["comensales"] = Cocinero::all();
		return view('catalogs.cocinero.list',$data);
	}    
	public function getAdd(){ 
		return view('catalogs.cocinero.add');
	}  
	public function postAddws(){ 
	    $comensal = new Cocinero(\Request::all());
	    $comensal->save();
		return \Redirect::to('/cocinero/list');
	}  
 
} 