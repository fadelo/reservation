<?php

namespace App\Http\Controllers;

use App\Models\Compagnie;
use Illuminate\Http\Request;
use App\Http\Requests\CompagnieFormRequest;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Redirect;

class CompagniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compagnies = Compagnie::orderBy('nom')->get();

        return view ('admin.compagnies.index', compact('compagnies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comp = Compagnie::get();
        return view('admin/compagnies/create', compact('comp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompagnieFormRequest $request)
    {
        dd('fadel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ('admin/compagnies/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compagnie = Compagnie::findOrFail($id);
        return view ('admin/compagnies/edit', compact('compagnie'));
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
        $comp = Compagnie::findOrFail($id);
        dd($comp);
        $comp->update([
            'nom' => ($request->nom),
            'description' => ($request->des),
            'rccm' => ($request->rccm),
            'ifu' => ($request->ifu),
            'telephone' => ($request->tel),
            'adresse' => ($request->adr),
            'email' => ($request->email),
            'wifi' => ($request->wifi),
            'climatisation' => ($request->clim),
            'num_compte_bancaire' => ($request->bank),
            'momo' => ($request->momo),
            'flooz' => ($request->flooz),
            'validiterReserv' => ($request->validiter),
            'penaliter' => ($request->penaliter),
            'durPostPenaliter' =>($request->postPenaliter),
            'msgAverti' => ($request->msgAverti),
        ]);

        Flashy::info('La compagnie a été bien modifiée');
        return redirect::to('admin/compagnies/index');
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
