<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DossierOk extends Model
{
    protected $fillable=['mnt_ok', 'mnt_traite', 'duree',  'date_ok', 'dossier_in_id'];

    public function dossierIn()
    {
        return $this->belongsTo('App\Models\DossierIn');
    }

    public function traite()
    {
        return $this->hasMany('App\Models\Traite');
    }
}
