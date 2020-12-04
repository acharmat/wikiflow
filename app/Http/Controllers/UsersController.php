<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        /*
        $users = User::paginate(10);*/

        $q = $request->get('query');
        $users = User::sortable()->where('firstname','LIKE','%'.$q.'%')->orwhere('email','LIKE','%'.$q.'%')->paginate(10);


        return view('users.index')->with(['users'=>$users]);
    }


/*
    public function search(Request $request){
        $this->validate($request, [
            'query' => 'required|string|max:255',
        ]);

        $q = $request->get('query');
        $users = User::where('firstname','LIKE','%'.$q.'%')->orwhere('email','LIKE','%'.$q.'%')->paginate(10);

        return view('users.search')->with([  'q'=>$q ,'users'=>$users]);
    }
*/


    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
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
    public function store(Request $request)
    {
        //
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
