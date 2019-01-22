<?php

namespace App\Http\Controllers;
use App\Models\Pays;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaysFormRequest;
use Illuminate\Support\Facades\Redirect;
use MercurySeries\Flashy\Flashy;

class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       /* if ($request)
        {
            $query=trim($request->get('searchText'));
            $listpays=DB::table('pays')->where('name','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(5);

            return view('admin/pays/index', ["listpays"=>$listpays, "searchText"=>$query]);

        }*/

        $listpays = Pays::paginate(5);


        return view('admin/pays/index', compact('listpays'));
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
    public function store(PaysFormRequest $request)
    {
        //$this->validate($request, [
           // 'nomPays'=> 'required|min:4',
       // ]);

        Pays::create([
		'code'=>$request->code,
		'pays'=>$request->pays
		]);
	

        //flash('Le pays a bien été ajouter'); => Pour utiliser la function flash de helpers

        Flashy::info('Le pays a été bien ajouté');
        

        return redirect::to('admin/pays');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listpays = Pays::paginate(5);
        $paysedit = Pays::findOrFail($id);


        return view ('admin/pays/edit', compact('listpays','paysedit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaysFormRequest $request, $id)
    {
        $pays = Pays::findOrFail($id);

        //$fad = $pays->name;

	$pays->update(['code'=>$request->code, 'pays'=>$request->pays]);
        

        //Flashy::info(sprintf("Le pays '#%s' a bien été modifié en '#%s'",$fad, $pays->name));

        Flashy::info('Le pays a bien été modifié');

        return redirect::to('admin/pays');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {	
        $pays = Pays::findOrFail($id);

        $pays->delete();

	Flashy::info('Le pays a bien été supprimé');

        return Redirect::to('admin/pays');
    }
}
