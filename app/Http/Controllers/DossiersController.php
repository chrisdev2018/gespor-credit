<?php

namespace App\Http\Controllers;

use App\Models\DossierIn;
use App\Models\Membre;
use App\Utils\Dossier;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\Cast\Object_;

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




        //return view('general.home' );
        return redirect('/');
    }



    public function type_credit($code)
    {
        if($code=='CT')
        {return 'Crédit de Trésorerie';}
        else if($code=='CS')
        {return 'Crédit  Scolaire';}
        else if($code=='MC')
        {return 'Micro-Crédit';}
        else if($code=='DE')
        {return 'Découvert';}

    }

    public function listerDossier()
    {
        $membre= DB::table('membres')
            ->get();
        $dossier_in= DB::table('dossier_ins')
            ->get();

        return view('dossiers.liste_dossier', compact('membre', 'dossier_in'));

    }

    public function dossier_a_traiter()
    {
        return view('dossiers.traiter_dossier', compact('dossier'));

    }
    public function dossier_a_modifier(Membre $membre, DossierIn $dossier)
    {
        return view('dossiers.modifier_dossier', compact('membre', 'dossier'));
    }

    public function modifier_dossier(Request $request)
    {
        //mise à jour de la table membre
        $membre = Membre::find($request->input('idmembre'));
        $membre->nom = $request->nom;
        $membre->prenom = $request->prenom;
        $membre->telephone = $request->telephone;
        $membre->num_cpte = $request->num_cpte;
        $membre->save();


        //mise à jour de la table dossier_in

        $dossier_in = DossierIn::find($request->input('iddossierin'));
        $dossier_in->mnt_dmd = $request->input('mnt_dmd');
        $dossier_in->date_in = $request->input('date_in');
        $dossier_in->type_credit = $this->type_credit($request->input('type_credit'));
        $dossier_in->garantie = $request->input('garantie');
        $dossier_in->membre_id = $request->input('idmembre');
        $dossier_in->save();

         return redirect(route('tous_les_dossiers'));
    }

}
