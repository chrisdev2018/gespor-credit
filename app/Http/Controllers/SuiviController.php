<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Traits\Helpers;

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

//dd($echeancier);

        return response()->json($echeancier);
    }
}
