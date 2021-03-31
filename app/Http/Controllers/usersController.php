<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        //recupere tout les companies
        $users = users::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($nomRecherche = $request->nomRecherche)) {
                    $query->orWhere('name', 'LIKE', '%' . $nomRecherche . '%')->get();
                }
            }]
        ])
            ->orderBy("id", "desc")
            ->paginate(10);

        //charge la view et passe les companies
        return view('users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(users $user)
    {
        return view('users.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(users $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = users::findOrFail($id);
         return view('users.edit',compact('user'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(users $user)
    {
        $user->delete();

        return redirect()->route('users.index')
                        ->with('success','Entreprise supprimée.');
    }
    public function store(Request $user)
    {


        users::create([
            'name' => $user['name'],
            'prenom' =>$user['prenom'],
            'email' => $user['email'],
            'password' => Hash::make($user['password']),
            'delegue' =>$user['delegue'],
            'pilote' => $user['pilote'],
            'admin' => $user['admin'],
            'id_centre' =>$user['id_centre'],
            'id_promotion' => $user['id_promotion']]);

        return redirect()->route('users.index')
                        ->with('success','user créée.');
    }


       /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $user, $id)
    {


        users::whereid($id)->update([
            'name' => $user['name'],
            'prenom' =>$user['prenom'],
            'email' => $user['email'],
            'password' => Hash::make($user['password']),
            'delegue' =>$user['delegue'],
            'pilote' => $user['pilote'],
            'admin' => $user['admin'],
            'id_centre' =>$user['id_centre'],
            'id_promotion' => $user['id_promotion']]);
        return redirect()->route('users.index')
                        ->with('success','user créée.');
    }

}
