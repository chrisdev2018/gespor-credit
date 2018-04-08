<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Traite extends Model
{
    protected $fillable=['statut', 'date_passage', 'mnt_effectif', 'date_effective', 'retard', 'dossier_ok_id'];
    public $timestamps=false;

    public function dossierOk()
    {
        return $this->belongsTo('App\Models\DossierOk');
    }
}
