<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dosen;

class DosenController extends Controller
{
	public function index(){
		$dosen = Dosen::all();
  		return view ('datadosen', ['dosen' => $dosen]);
	}
    
}
