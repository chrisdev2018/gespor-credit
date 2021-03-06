<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DossierIn extends Model
{
    protected $fillable=[ 'mnt_dmd', 'date_in', 'garantie', 'type_credit', 'membre_id'];
    public $timestamps=false;

    public function membre()
    {
        return $this->belongsTo('App\Models\Membre');
    }

   public function dossierOk()
    {
        return $this->hasMany('App\Models\DossierOk');
    }

    public function dossierOut()
    {
        return $this->hasMany('App\Models\DossierOut');
    }

    public function decouvert()
    {
        return $this->hasMany('App\Models\Decouvert');
    }

}
