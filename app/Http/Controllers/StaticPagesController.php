<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\Ville;
use App\Models\Compagnie;
use App\Models\HeureDepart;
use App\Models\LieuEmbarq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class StaticPagesController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function faq()
    {
    	return view('pages.faq');
    }

 

    public function trajet(Request $request)
    {
        $dateDpt = $request->dateDpt;

        $villeDpt=$request->villeDpt;
        $idDpt= Ville::where('ville','like','%'.$villeDpt.'%')->first()->id;

        $villeArr=$request->villeArr;
        $idArr= Ville::where('ville','like','%'.$villeArr.'%')->first()->id;
        $trajets= Trajet::where('idVilleDpt',$idDpt)->where('idVilleArr',$idArr)->orWhere('idVilleDpt', $idArr)->where('idVilleArr', $idDpt)->get();
        $infos=[];
        foreach ($trajets as $trajet) {
            array_push($infos, ['id_comp'=>$trajet->idComp, 'tarif'=>$trajet->tarif]);
        }
        $compagnies=[];
        $tarifs = [];
        foreach ($infos as $info) {
            $compagnie = Compagnie::whereId($info['id_comp'])->first();
            array_push($compagnies, $compagnie);
            array_push($tarifs, $info['tarif']);
        }
        $nb= sizeof($compagnies);
        return view('pages.trajets',compact('villeDpt','villeArr','compagnies','tarifs','nb', 'dateDpt'));

        //dd(sizeof($info));



        $trajets = Trajet::paginate(3);
        $villeDpt = [];
        $villeArr = [];
        $comp = [];
        $lieuEmbarq = [];
        $heureDpt = [];
        $nb = count($trajets);
        foreach ($trajets as $trajet) {
            $vd = Ville::whereId($trajet->idVilleDpt)->first()->ville;
            $va = Ville::whereId($trajet->idVilleArr)->first()->ville;
            $cp = Compagnie::whereId($trajet->idComp)->first();
            $lieu = LieuEmbarq::where('idTrjt', $trajet->id)->get();
            $heure = HeureDepart::where('idTrjt', $trajet->id)->get();
            array_push($villeDpt, $vd);
            array_push($villeArr, $va);
            array_push($comp, $cp);
            array_push($lieuEmbarq, $lieu);
            array_push($heureDpt, $heure);
        }

        return view ('pages.trajets', compact('trajets', 'villeDpt', 'villeArr', 'comp', 'nb', 'lieuEmbarq', 'heureDpt'));
    }

    
}
