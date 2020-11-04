<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$busqueda = $request->get('busqueda');
		$tipo   = $request->get('tipo');
		
		$user = User::orderBy('id', 'ASC')
		->Buscarpor($tipo, $busqueda)
		->paginate(10);
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $user = User::create($request->all());
        $user->password=bcrypt($request->input('password'));
        $user->save();
        //dd($user);

		return redirect()->back()->with('status','Datos creados satisfactoriamente');

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
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
		
		
	$user = User::findOrFail($request->usid);
    $user->update($request->all());

		
		return redirect()->back()->with('status','DATOS ACTUALIZADOS');
    }


    public function destroy(Request $request)
    {
		
		$user = User::findOrFail($request->usid);
        $user->delete();

		return redirect()->back()->with('message','DATOS ELIMINADOS');
		

    }
}
