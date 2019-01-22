<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Trajet;
use App\Models\Ville;
use App\Models\Compagnie;
use Illuminate\Http\Request;

class ClientReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::where('idUser', '1')->orderBy('dateReserv', 'dsc')->get();
        $nb = count($reservations);
        $trjt = [];
        $comp = [];
        $vd = [];
        $va = [];
        foreach ($reservations as $reserv) {
            $trajet = Trajet::whereId($reserv->idTrjt)->first();
            $Compagnie = Compagnie::whereId($trajet->idComp)->first();
            $villeDpt = Ville::whereId($trajet->idVilleDpt)->first()->ville;
            $villeArr = Ville::whereId($trajet->idVilleArr)->first()->ville;
            array_push($trjt, $trajet);
            array_push($comp, $Compagnie);
            array_push($vd, $villeDpt);
            array_push($va, $villeArr);

        }

        return view ('client/reservations/index', compact('reservations', 'nb', 'trjt', 'vd', 'va', 'comp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('client/reservations/create');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('ca marche');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserv = Reservation::findOrFail($id);
        $trajet = Trajet::whereId($reserv->idTrjt)->first();
        $comp = Compagnie::whereId($trajet->idComp)->first();
        $vd = Ville::whereId($trajet->idVilleDpt)->first()->ville;
        $va = Ville::whereId($trajet->idVilleArr)->first()->ville;

        return view ('client/reservations/edit', compact('reserv', 'trajet', 'comp', 'vd', 'va'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
