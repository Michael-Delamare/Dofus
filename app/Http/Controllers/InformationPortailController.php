<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Information_portail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class InformationPortailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Information_portail  $information_portail
     * @return \Illuminate\Http\Response
     */
    public function show(Information_portail $information_portail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information_portail  $information_portail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $information_portail = Information_portail::find($id);
        return view('portails/modif_info_portail',['information_portail'=>$information_portail]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information_portail  $information_portail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $information_portail = Information_portail::findOrFail($id);
        $information_portail->position = $request->position;
        $information_portail->utilisation = $request->utilisation;
        $information_portail->users_id = Auth::user()->id;
        $information_portail->save();
        return redirect('/serveur')->with('success', 'Portail modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information_portail  $information_portail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information_portail $information_portail)
    {
        //
    }
}
