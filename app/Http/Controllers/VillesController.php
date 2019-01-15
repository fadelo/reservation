<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use App\Models\Pays;
use Illuminate\Http\Request;
use App\Http\Requests\VilleFormRequest;
use App\Http\Controllers\Controller;


class VillesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = Ville::all();
        $listpays = Pays::get();
        $tab =[];
        foreach ($listpays as $pays) {
            array_push($tab, $pays->name);
        }
        //dd($tab);

        return view ('admin/villes/index', compact('tab','villes'));
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

        dd($request->ville);
        

        Ville::create([
            'name'=>($request->name),
            'idPays'=>($request->idPays),
        ]);

        Flashy::info('Le pays a été bien ajouté');

        return redirect::to('admin/villes/index');
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
        //
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
