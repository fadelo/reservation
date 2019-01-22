<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\Ville;
use App\Models\Compagnie;
use Illuminate\Http\Request;

class ClientTrajetsController extends Controller
{
    public function index(){

    	$trajets = Trajet::all();
    	$villeDpt = [];
    	$villeArr = [];
    	$comp = [];
    	$nb = count($trajets);

    	foreach ($trajets as $trajet) {
    		$vd = Ville::whereId($trajet->idVilleDpt)->first()->ville;
    		$va = Ville::whereId($trajet->idVilleArr)->first()->ville;
    		$cp = Compagnie::whereId($trajet->idComp)->first();

    		array_push($villeDpt, $vd);
    		array_push($villeArr, $va);
    		array_push($comp, $cp);
    	}

    	return view ('client/trajets', compact('trajets', 'villeDpt', 'villeArr', 'comp', 'nb'));
    }
}
