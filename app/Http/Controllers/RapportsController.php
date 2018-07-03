<?php

namespace App\Http\Controllers;

use App\Traits\Helpers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RapportsController extends Controller
{
    use Helpers;

    public function etats_CT(Request $request)
    {
        $type_credit=$this->type_credit("CT");
        $date=$this->_format( Carbon::now());

        $dossiers =  DB::table('membres')
            ->join('dossier_ins', 'dossier_ins.membre_id', '=', 'membres.id')
            ->join('dossier_oks', 'dossier_oks.dossier_in_id', '=', 'dossier_ins.id')
            ->join('traites', 'traites.dossier_ok_id', '=', 'dossier_oks.id')
            ->where('dossier_ins.type_credit', '=', $type_credit)
            ->where('traites.date_passage', '=', $date)
            ->get()->groupBy('membre_id');

        return view("rapports.etats_prets",  compact('dossiers'));
    }

    public function etats_CS(Request $request)
    {
        $type_credit=$this->type_credit("CS");

        $date=$this->_format( Carbon::now());

        $dossiers =  DB::table('membres')
            ->join('dossier_ins', 'dossier_ins.membre_id', '=', 'membres.id')
            ->join('dossier_oks', 'dossier_oks.dossier_in_id', '=', 'dossier_ins.id')
            ->join('traites', 'traites.dossier_ok_id', '=', 'dossier_oks.id')
            ->where('dossier_ins.type_credit', '=', $type_credit)
            ->where('traites.date_passage', '=', $date)
            ->get()->groupBy('membre_id');

       //dd($dossiers);

        return view("rapports.etats_prets", compact('dossiers'));
    }

    public function etats_MC(Request $request)
    {
        $type_credit=$this->type_credit("MC");

        $date=$this->_format( Carbon::now());

        $dossiers =  DB::table('membres')
            ->join('dossier_ins', 'dossier_ins.membre_id', '=', 'membres.id')
            ->join('dossier_oks', 'dossier_oks.dossier_in_id', '=', 'dossier_ins.id')
            ->join('traites', 'traites.dossier_ok_id', '=', 'dossier_oks.id')
            ->where('dossier_ins.type_credit', '=', $type_credit)
            ->where('traites.date_passage', '=', $date)
            ->get()->groupBy('membre_id');



        return view("rapports.etats_prets", compact('dossiers'));
    }


    public function afficher_etat(Request $request)
    {
        $type_credit=$this->type_credit($request->input('type_credit'));


        $date=$this->format(new Carbon($request->input('date')) );

        $dossier =  DB::table('membres')
            ->join('dossier_ins', 'dossier_ins.membre_id', '=', 'membres.id')
            ->join('dossier_oks', 'dossier_oks.dossier_in_id', '=', 'dossier_ins.id')
            ->join('traites', 'traites.dossier_ok_id', '=', 'dossier_oks.id')
            ->where('dossier_ins.type_credit', '=', $type_credit)
            ->get()->groupBy('membre_id');


        $dossiers = array();

        foreach($dossier as $doss)
        {
            foreach($doss as $dos)
            {
                if($this->format(new Carbon($dos->date_passage)) == $date)
                {
                    $dossiers[] = $dos;
                }
            }
        }

     //   dd($dossiers);

        return view("rapports.etats_prets", compact('dossiers'));
    }

    public function choix_etat()
    {
        return view("rapports.choix_etat");
    }


}
