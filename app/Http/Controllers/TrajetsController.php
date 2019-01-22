<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\Ville;
use App\Models\HeureDepart;
use App\Models\LieuEmbarq;
use Illuminate\Http\Request;
use App\Http\Requests\TrajetFormRequest;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Redirect;

class TrajetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = Ville::orderBy('ville')->get();
        $trajets = Trajet::where('idComp', '1')->get();
        $tabDpt = [];
        $tabArr = [];
        $nb = count($trajets);
        
        foreach ($trajets as $trajet) {
            $villeDpt = Ville::whereId($trajet->idVilleDpt)->first()->ville;
            $villeArr = Ville::whereId($trajet->idVilleArr)->first()->ville;
            array_push($tabDpt, $villeDpt);
            array_push($tabArr, $villeArr);
        };

        
        return view ('agent/trajets/index', compact('trajets', 'villes', 'tabDpt', 'tabArr', 'nb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trajets = Trajet::where('idComp', '1')->get();

        $idVilleDpt = Ville::whereVille($request->input('villeDpt'))->first()->id;
        $idVilleArr = Ville::whereVille($request->input('villeArr'))->first()->id;
        
        Trajet::create([
            'idVilleDpt'=>($idVilleDpt),
            'idVilleArr'=>($idVilleArr),
            'idComp'=>'1',
            'tarif'=>($request->tarif),
        ]);

        Flashy::info('Le trajet a été ajouté');
        return Redirect::back();
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
        $trajet = Trajet::findOrFail($id);

        dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrajetFormRequest $request, $id)
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
        Trajet::destroy($id);

        Flashy::info('Le trajet a été supprimé');

        return Redirect::back();
    }



    public function info(){

        $heureDpt = HeureDepart::where('idTrjt', '1')->get();
        $lieuEmbarq = LieuEmbarq::where('idTrjt', '1')->get();

                
        return view ('agent/trajets/info', compact('heureDpt', 'lieuEmbarq'));
    }
}
