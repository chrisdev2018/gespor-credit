<?php

namespace App\Http\Controllers;

use App\Models\DossierIn;
use App\Models\Membre;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DossiersController extends Controller
{
    public function displayForm()
    {
        return view('dossiers.nouveau_dossier');
    }

    public function store(Request $request)
    {

            //on recupère les champs qui sont propres au membre
       $membres = [
            'nom'=> $request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'telephone'=>$request->input('telephone'),
            'num_cpte'=>$request->input('num_cpte')
        ];

        //on recupère les champs qui sont spéfiques au dossier
       $dossiers=[
           'mnt_dmd'=>$request->input('mnt_dmd'),
           'date_in'=>$request->input('date_in'),
           'garantie'=>$request->input('garantie'),
           'type_credit'=>$this->type_credit($request->input('type_credit'))
       ];

        //on enregistre le membre
        $membre=Membre::create($membres); // ici on a toutes les informations sur le membre qu'in vient d'enregistrer ainsi que son ID

        $dossier=$membre->dossierIn()->create($dossiers);




        return view('general.home', ['dossier'=>$dossier] );
    }



    public function type_credit($code)
    {
        if($code=='CT')
        {return 'Crédit de Trésorerie';}
        else if($code=='CS')
        {return 'Crédit de Scolaire';}
        else if($code=='MC')
        {return 'Micro-Crédit';}
        else
        {return 'Découvert';}

    }

    public function listerDossier()
    {
        $dossiers= DB::table('membres')
            ->join('dossier_ins', 'membres.id', '=', 'dossier_ins.membre_id')
            ->get();


        return view('dossiers.liste_dossier', ['dossiers'=>$dossiers] );

    }

    public function dossier_a_traiter()
    {


        return view('dossiers.traiter_dossier' );

    }
}
