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
    public function index()
    {
        //recupere tout les companies
        $companies = Company::all();

        //charge la view et passe les companies
        return view('companies.index',compact('companies'))
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
    public function edit(Company $company)
    {
        return view('companies.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
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
