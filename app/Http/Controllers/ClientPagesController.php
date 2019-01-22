<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Trajet;
use App\Models\Compagnie;
use Illuminate\Http\Request;

class ClientPagesController extends Controller
{
    public function home(){

    	$reserv = Reservation::where('idUser', '1')->count();
    	$trajet = Trajet::all()->count();
    	$compagnie = Compagnie::all()->count();

    	return view ('client.home', compact('reserv', 'trajet', 'compagnie'));
    }
}
