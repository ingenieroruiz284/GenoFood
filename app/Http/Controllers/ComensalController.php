<?php namespace App\Http\Controllers;

use Auth;
use DB;

use App\Alumno; 
use App\Models\Comensal;

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
	    $comensal->save();
		return \Redirect::to('/section/gracias');
	}  
 
} 