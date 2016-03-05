<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    //
    public function postRegister() {
        $data = Input::all();
    }

    public function getRegister() {
        return view('register');
    }
}
