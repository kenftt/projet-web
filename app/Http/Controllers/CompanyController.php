<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //recupere tout les companies
        $companies = Company::where([
            ['nom_ent', '!=', Null],
            [function ($query) use ($request) {
                if (($nomRecherche = $request->nomRecherche)) {
                    $query->orWhere('nom_ent', 'LIKE', '%' . $nomRecherche . '%')->get();
                }
            }]
        ])
            ->orderBy("id_ent", "desc")
            ->paginate(10);

        //charge la view et passe les companies
        return view('companies.index', compact('companies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function CompanyIndex(Request $request)
    {
        //recupere tout les companies
        $companies = Company::where([
            ['nom_ent', '!=', Null],
            [function ($query) use ($request) {
                if (($term = $request->term)) {
                    $query->orWhere('nom_ent', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy("id_ent", "desc")
            ->paginate(10);

        //charge la view et passe les companies
        return view('pages.company', compact('companies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
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
            'nom_ent'=>'required',
            'secteur_ent'=>'required',
            'adresse_ent'=>'required',
            'stagiaire_pris'=>'required',
            'note_stagiaire_ent'=>'required',
            'note_pilote_ent'=>'required',
        ]);

        Company::create($request->all());

        return redirect()->route('companies.index')
                        ->with('success','Entreprise créée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.edit',compact('company'));
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
            'nom_ent'=>'required',
            'secteur_ent'=>'required',
            'adresse_ent'=>'required',
            'stagiaire_pris'=>'required',
            'note_stagiaire_ent'=>'required',
            'note_pilote_ent'=>'required',
        ]);


        Company::whereid_ent($id)->update($data);
        return redirect()->route('companies.index')
                        ->with('completed', 'Entreprise mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index')
                        ->with('success','Entreprise supprimée.');
    }
}
