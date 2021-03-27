<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Company as AppCompany;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function __construct()
	{
		$this->middleware('auth');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $company = DB::table('companies')->paginate(3);

        return view('companies.index', ['companies' => $company]);

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
            'nom_ent' => 'required',
            'secteur_ent' => 'required',
            'adresse_ent' => 'required',
            'stagiaire_pris' => 'required',
            'note_stagiaire_ent' => 'required',
            'note_pilote_ent' => 'required',
        ]);

        AppCompany::create($request->all());

        return redirect()->route('companies.index')
        ->with('success','Company created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(AppCompany $company)
    {
        return view('companies.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(AppCompany $company)
    {
        return view('companies.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppCompany $company)
    {
        $request->validate([
            'nom_ent' => 'required',
            'secteur_ent' => 'required',
            'adresse_ent' => 'required',
            'stagiaire_pris' => 'required',
            'note_stagiaire_ent' => 'required',
            'note_pilote_ent' => 'required',
        ]);

        $company->update($request->all());

        return redirect()->route('companies.index')
                        ->with('success','Company updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppCompany $company)
    {
        $company->delete();

        return redirect()->route('companies.index')
                        ->with('success','Company deleted successfully');
    }
}
