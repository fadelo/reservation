<?php

namespace App\Http\Controllers;

use App\Models\Compagnie;
use Illuminate\Http\Request;

class ClientCompagniesController extends Controller
{
    public function index(){

    	$comp = Compagnie::orderBy('nom')->get();
    	$nb = count($comp);


    	return view ('client/compagnies', compact('comp', 'nb'));

    }
}
