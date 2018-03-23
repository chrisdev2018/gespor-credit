<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DossierOk extends Model
{
    protected $fillable=['mnt_ok', 'mnt_traite', 'duree',  'date_ok', 'id_dossier_in'];

    public function dossierIn()
    {
        return $this->belongsTo('App\Models\DossierIn');
    }

    public function traite()
    {
        return $this->hasMany('App\Models\Traite');
    }
}
