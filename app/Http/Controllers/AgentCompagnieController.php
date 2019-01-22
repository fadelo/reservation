<?php

namespace App\Http\Controllers;

use App\Models\Compagnie;
use Illuminate\Http\Request;
use App\Http\Requests\CompagnieFormRequest;
use Illuminate\Support\Facades\Redirect;
use Mercuseries\Flashy\Flashy;

class AgentCompagnieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maComp = Compagnie::whereId('1')->first();

        return view ('agent/compagnie/index', compact('maComp'));
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
    public function store(CompagnieFormRequest $request)
    {
        //
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
        $maComp = Compagnie::findOrFail($id);

        return view ('agent/compagnie/edit', compact('maComp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompagnieFormRequest $request, $id)
    {
        $maComp = Compagnie::findOrFail($id);
        
        dd($maComp);

        $maComp->update([
            'nom'=>($request->nom),
            'description'=>($request->des),
            'rccm'=>($request->rccm),
            'ifu'=>($request->ifu),
            'telephone'=>($request->tel),
            'adresse'=>($request->adr),
            'email'=>($request->email),
            'wifi'=>($request->wifi),
            'climatisation'=>($request->clim),
            'num_compte_bancaire'=>($request->bank),
            'momo'=>($request->momo),
            'flooz'=>($request->fooz),
            'validiterReserv'=>($request->validiter),
            'durPostPenaliter'=>($request->postPenaliter),
            'penaliter'=>($request->penaliter),
            'msgAverti'=>($request->msgAverti),

        ]);
        Flashy::info('Les données de votre compagnie on bien été modifié');

        return Redirect::back();
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
