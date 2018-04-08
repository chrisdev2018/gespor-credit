<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DossierOk extends Model
{
    protected $fillable=['mnt_ok', 'mnt_traite',  'date_debut', 'date_fin',  'dossier_in_id'];
    public $timestamps=false;

    public function dossierIn()
    {
        return $this->belongsTo('App\Models\DossierIn');
    }

    public function traite()
    {
        return $this->hasMany('App\Models\Traite');
    }
}
