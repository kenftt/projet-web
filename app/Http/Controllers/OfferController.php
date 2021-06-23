<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::all();

        return view('offers.index', compact('offers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'duree_stage'=>'required',
            'renumeration'=>'required',
            'lm'=>'required',
            'fiche_valid'=>'required',
            'convention_stage'=>'required',
            'nb_place'=>'required',
            'competence'=>'required',
            'id_ent'=>'required',
        ]);

        Offer::create($request->all());

        return redirect()->route('offers.index')
                        ->with('success','Offre créée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        return view('offers.show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::findOrFail($id);
        return view ('offers.edit', compact('offer'));
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
        $data = $request->validate([
            'duree_stage'=>'required',
            'renumeration'=>'required',
            'lm'=>'required',
            'fiche_valid'=>'required',
            'convention_stage'=>'required',
            'nb_place'=>'required',
            'competence'=>'required',
            'id_ent'=>'required',
        ]);

        Offer::whereid_offre($id)->update($data);
        return redirect()->route('offers.index')
                        ->with('completed', 'Offre mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();

        return redirect()->route('offers.index')
                        ->with('message','Offre supprimée.');
    }
}
