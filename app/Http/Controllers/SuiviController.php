<?php

namespace App\Http\Controllers;

use App\Models\Traite;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Traits\Helpers;
use Carbon\Carbon;

class SuiviController extends Controller
{
    use Helpers;



    public function home()
    {
        return view('suivi.gestion_echeancier');
    }

    public function list_membre($type_credit)
    {
        $param=$this->type_credit($type_credit);

        $list = DB::table('membres')
            ->join('dossier_ins', function($join) use ($param){
                $join->on( 'dossier_ins.membre_id', '=', 'membres.id')
                         ->where('dossier_ins.type_credit', '=', $param);
            })
            ->join('dossier_oks', 'dossier_oks.dossier_in_id', '=', 'dossier_ins.id')
            ->select('membres.id', 'membres.nom', 'membres.prenom')
            ->get();

        return response()->json($list);

    }

    public function echeancier($type_credit,$id_membre)
    {
        $param=$this->type_credit($type_credit);

        $dossier =DB::table('membres')
            ->join('dossier_ins', function($join) use ($param){
                $join->on( 'dossier_ins.membre_id', '=', 'membres.id')
                    ->where('dossier_ins.type_credit', '=', $param);
            })
            ->join('dossier_oks', 'dossier_oks.dossier_in_id', '=', 'dossier_ins.id')
            ->where('membres.id', '=', $id_membre)
            ->get();

       $list_traites =DB::table('traites')
                    ->where('traites.dossier_ok_id', '=', $dossier[0]->id)
                    ->get();

        $echeancier = ['dossier'=>$dossier, 'list_traites'=>$list_traites];

        return response()->json($echeancier);
    }

    public function traites_en_cours()
    {
       $result = DB::table('membres')
            ->join('dossier_ins', 'dossier_ins.membre_id', '=', 'membres.id')
            ->join('dossier_oks', 'dossier_oks.dossier_in_id', '=', 'dossier_ins.id')
           ->join('traites', 'traites.dossier_ok_id','=', 'dossier_oks.id')
            ->get();

        $traites=array();

        foreach($result as $res)
        {
            if($this->format(new Carbon($res->date_passage) )== $this->format(Carbon::now()) )
            {
                $traites[]=$res;
            }
        }

        return view('suivi.traites_en_cours', compact('traites'));
    }

    public function _traites_en_cours($date)
    {

        $date = new Carbon($date);

       $result = DB::table('membres')
            ->join('dossier_ins', 'dossier_ins.membre_id', '=', 'membres.id')
            ->join('dossier_oks', 'dossier_oks.dossier_in_id', '=', 'dossier_ins.id')
           ->join('traites', 'traites.dossier_ok_id','=', 'dossier_oks.id')
            ->get();

        $traites=array();

        foreach($result as $res)
        {
            if($this->format(new Carbon($res->date_passage) )== $this->format($date) )
            {
                $traites[]=$res;
            }
        }

        return view('suivi.traites_en_cours', compact('traites'));
    }

    public function decouverts_en_cours()
    {
        $result=0;
        return view('suivi.decouverts_en_cours', compact($result));
    }

    public function solder_traite(Request $request)
    {


        $traite = Traite::find($request->input('traite_id'));

        $objet = DB::table('traites')
                ->join('dossier_oks', 'dossier_oks.id', '=', 'traites.dossier_ok_id')
                ->where('traites.id', '=', $traite->id)
                ->get();

        $traite->mnt_effectif += $request->input('mnt_effectif');


     if((int)($traite->mnt_effectif) >=( int)($objet[0]->mnt_traite))
        {
            $traite->statut = 1;

            $traite->mnt_effectif = $objet[0]->mnt_traite;
        }


                    $date_effective= new Carbon($request->input('date_effective'));
                    $date_passage = new Carbon($traite->date_passage);

                    $traite->retard= $date_effective->diffInDays($date_passage);

                    $traite->date_effective = $request->input('date_effective');

                    $traite->save();


        return redirect(route('traites_en_cours'));
    }


}
