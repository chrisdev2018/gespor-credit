<?php

namespace App\Http\Controllers;

use App\Traits\Helpers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RapportsController extends Controller
{
    use Helpers;

    public function etats_CT()
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

    public function etats_CS()
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

    public function etats_MC()
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


}
