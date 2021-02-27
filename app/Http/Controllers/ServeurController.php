<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Information_portail;
use App\Models\Serveur;
use App\Models\Portail;
use App\Http\Service\PortailService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serveurs = Serveur::all();
        return view('portails/portails-serveur',[
            'serveurs'=>$serveurs,
        ]);
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
     * @param  \App\Models\Serveur  $serveur
     * @return \Illuminate\Http\Response
     */
    public function show(Serveur $serveur)
    {
        $information_portail_positions = Information_portail::join('portails', 'portail_id' ,'=','portails.id')
                                                            ->join('serveurs', 'serveur_id', '=', 'serveurs.id')
                                                            ->join('users', 'users_id', '=', 'users.id')
                                                            ->where('serveurs.id', '=', $serveur->id)
                                                            ->select('information_portails.id as info_p_id','information_portails.updated_at as upd','information_portails.*',
                                                             'serveurs.*', 'portails.*', 'users.name')
                                                            ->get();
                                                          //  dd($information_portail_positions);

        foreach ($information_portail_positions as $ipp) {
            $date = $ipp->upd;
            Carbon::setLocale('fr');
            $date = Carbon::parse($date);
            $elapsed = $date->longAbsoluteDiffForHumans(Carbon::now(),2);
            $ipp->tUpd = $elapsed;
            $couleur = new PortailService($ipp);
            $ipp->couleurUti = $couleur;
        }
        return view('portails/portails',['serveur'=>$serveur,'portails'=>$information_portail_positions]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serveur  $serveur
     * @return \Illuminate\Http\Response
     */
    public function edit(Serveur $serveur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serveur  $serveur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serveur $serveur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serveur  $serveur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serveur $serveur)
    {
        //
    }
}
