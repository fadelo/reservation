<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use App\Models\Pays;
use Illuminate\Http\Request;
use App\Http\Requests\VilleFormRequest;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Redirect;


class VillesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = Ville::orderBy('ville')->get();
        $listpays = Pays::get();
        $tab =[];
        foreach ($villes as $ville) {
            $pays = Pays::whereId($ville->idPays)->first()->pays;
            array_push($tab, $pays);
        };
        $nb = count($villes);
        //dd($tab);

        return view ('admin/villes/index', compact('villes', 'listpays', 'tab', 'nb'));
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
    public function store (VilleFormRequest $request)
    {
        $idPays = Pays::wherePays($request->input('pays'))->first()->id;
           

        Ville::create([
            'ville'=>($request->ville),
            'idPays'=>($idPays),
        ]);

        Flashy::info('La ville a été bien ajouté');

        return redirect::back();
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
        $villeEdit = Ville::findOrFail($id);
        $listpays = Pays::get();
        $paysEdit = Pays::whereId($villeEdit->idPays)->first()->pays;

        return view ('admin.villes.edit', compact(['villeEdit','listpays', 'paysEdit']));
    }
        
    
        
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VilleFormRequest $request, $id)
    {
        $ville = Ville::findOrFail($id);
        $idPays = Pays::wherePays($request->input('pays'))->first()->id;
        
        $ville->update([
            'ville'=>($request->ville),
            'idPays'=>($idPays),
            ]);

        Flashy::info('La ville a été modifié');

        return redirect::to('admin/villes');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ville::destroy($id);

        Flashy::info('La ville a été supprimé');

        return Redirect::back();
    }
}
