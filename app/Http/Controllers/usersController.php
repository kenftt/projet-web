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
    public function index()
    {
        $users = users::all();

        // load the view and pass the sharks
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            // load the create form (app/views/sharks/create.blade.php)
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
    public function store(Request $request, users $user)
    {
             $request->validate([
            'name'       => 'required',
            'prenom'       => 'required',
            'email'      => 'required|email',
            'password'       => 'required',
            'delegue' => 'required|numeric',
            'pilote' => 'required|numeric',
            'id_centre' => 'required|numeric',
            'id_promotion' => 'required|numeric',
        ]);
        users::create($request->all());
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
    public function update(Request $request, $id)
    {
       $data = $request->validate([
            'name'       => 'required',
            'prenom'       => 'required',
            'password' => 'required',
            'email'      => 'required|email',
            'delegue' => 'required|numeric',
            'pilote' => 'required|numeric',
            'id_centre' => 'required|numeric',
            'id_promotion' => 'required|numeric',
        ]);

        users::whereid($id)->update($data);
        return redirect()->route('users.index')
                        ->with('success','user créée.');
    }

}
