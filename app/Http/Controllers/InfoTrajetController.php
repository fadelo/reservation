<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoTrajetController extends Controller
{
    public function index(){
    	return view ('agent/trajets/info');
    }
}
