<?php

namespace App\Http\Controllers;

use App\Models\DossierIn;
use App\Models\DossierOk;
use App\Models\DossierOut;
use App\Models\Membre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\Cast\Object_;
use function Sodium\compare;

class DossiersController extends Controller
{
    public function displayForm()
    {
        return view('dossiers.nouveau_dossier');
    }

    public function enregistrer_dossier(Request $request)
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
        return redirect(route('tous_les_dossiers'));
    }

    public function listerDossier()
    {
        $membre= DB::table('membres')
            ->get();
        $dossier_in= DB::table('dossier_ins')
            ->get();

        return view('dossiers.liste_dossier', compact('membre', 'dossier_in'));

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

    public  function accorder_dossier(Request $request)
    {

    }

    public  function rejeter_dossier(Request $request)
    {
            DossierOut::create([
                'motif'=> $request->input('motif'),
                'date_out'=>$request->input('date_out'),
                'dossier_in_id'=>$request->input('dossier_in_id')
                ]);

        return redirect(route('tous_les_dossiers'));
    }

    public function check_status()
    {
        $list_id=array();

        $dossier_ins = DB::table('dossier_ins')
            ->get();

        $dossier_oks = DB::table('dossier_oks')
            ->get();

        $dossier_outs = DB::table('dossier_outs')
            ->get();

        foreach ($dossier_ins as $dossier_in)
        {
            foreach ($dossier_oks as $dossier_ok)
            {
                if($dossier_in->id == $dossier_ok->dossier_in_id)
                {
                    $list_id[]=$dossier_in->id;
                }
            }
        }

        foreach ($dossier_ins as $dossier_in)
        {
            foreach ($dossier_outs as $dossier_out)
            {
                if($dossier_in->id == $dossier_out->dossier_in_id)
                {
                    $list_id[]=$dossier_in->id;
                }
            }
        }


            return response()->json($list_id);
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

   /* public function generer_traites()
    {
        if(true)
        {
            return view('');
        }

        else
        {
            return view('error');
        }
    }*/

}
