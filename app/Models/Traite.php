<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Traite extends Model
{
    protected $fillable=['id_dossier_ok', 'statut', 'date_passage', 'mnt_effectif', 'date_effective', 'solde_fin_debit'];

    public function dossierOk()
    {
        return $this->belongsTo('App\Models\DossierOk');
    }
}
