<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\HeureDepart;
use App\Models\LieuEmbarq;
use Illuminate\Http\Request;

class InfoTrajetController extends Controller
{
    public function index(){
    	$heureDpt = HeureDepart::where('idTrjt', '1')->get();
    	$lieuEmbarq = LieuEmbarq::where('idTrjt', '1')->get();

    	    	
    	return view ('agent/trajets/info', compact('heureDpt', 'lieuEmbarq'));
    }
}
