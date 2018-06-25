<?php

namespace App\Http\Controllers;

use App\Models\DossierIn;
use App\Models\DossierOk;
use App\Models\DossierOut;
use App\Models\Decouvert;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\Helpers;


class DossiersController extends Controller
{
    use Helpers;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function displayForm()
    {
        $membres = DB::table('membres')->get();

        return view('dossiers.nouveau_dossier', compact('membres'));
    }

    public function enregistrer_dossier(Request $request)
    {
        //on recupère les champs qui sont spéfiques au dossier
       $dossiers=[
           'mnt_dmd'=>$request->input('mnt_dmd'),
           'date_in'=>$request->input('date_in'),
           'garantie'=>$request->input('garantie'),
           'type_credit'=>$this->type_credit($request->input('type_credit')),
           'membre_id'=>$request->input('membre_id')
       ];

     DossierIn::create($dossiers);
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

        $debut=new Carbon($request->input('date_debut'));
        $fin=new Carbon($request->input('date_fin'));


        $nb_traites = $fin->diffInMonths($debut);


       // dd($this->dates_traite($nb_traites, $debut));

        $dossier_ok=DossierOk::create($request->all());

        $dates_echeances=$this->dates_traite($nb_traites, $debut);

        foreach ($dates_echeances as $dates)
        {
            $dossier_ok->traite()->create([
                'date_passage'=>$dates,
                'date_effective'=>$dates
                ]);
        }

        return redirect(route('tous_les_dossiers'));

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

    public function lister_dossier_ok()
    {
        $list = DB::table('membres')
            ->join('dossier_ins', 'dossier_ins.membre_id', '=', 'membres.id')
            ->join('dossier_oks', 'dossier_oks.dossier_in_id', '=', 'dossier_ins.id')
            ->get();

        return view('dossiers.liste_dossier_ok', compact('list'));
    }

    public function lister_dossier_out()
    {
        $list = DB::table('membres')
            ->join('dossier_ins', 'dossier_ins.membre_id', '=', 'membres.id')
            ->join('dossier_outs', 'dossier_outs.dossier_in_id', '=', 'dossier_ins.id')
            ->get();

        //dd($list);
        return view('dossiers.liste_dossier_out', compact('list'));
    }

    public function  nouveau_decouvert()
    {
        $membres = DB::table('membres')->get();
        return view('dossiers.nouveau_decouvert', compact('membres'));
    }

    public function  enregistrer_decouvert(Request $request)
    {
        $statut = 0;
        Decouvert::create([
            'montant'=>$request->input('montant'),
            'agio'=>$request->input('agio'),
            'date_ok'=>$request->input('date_ok'),
            'statut'=>$statut,
            'membre_id'=>$request->input('membre_id'),
        ]);
        return redirect(route('tous_les_dossiers'));
    }

    public function dates_traite($nb, Carbon $date)
    {
        $tab=array();

           for ($i=0; $i<($nb+1); $i++)
           {
               $tab[]=$date->copy()->addMonths($i);
           }
            return $tab;
    }


}
