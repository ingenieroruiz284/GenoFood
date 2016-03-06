<?php namespace App\Http\Controllers;

use Auth;
use DB;

use App\Models\Comensal;
use App\Models\Cocinero;
use App\Models\Repartidor;

use Illuminate\Http\Request; 
class SectionController extends Controller {

	public function index(){ 
		return "";
	}
	public function getGracias(){  
		$data = []; 
		return view('thankyou',$data);
	}

	public function getAcercade(){  
		$data = []; 
		return view('acercade',$data);
	}

	public function getCheckout(){  
		$data = []; 
		return view('checkout',$data);
	}

	public function getAlianzas(){  
		$data = []; 
		return view('alianzas',$data);
	}
} 