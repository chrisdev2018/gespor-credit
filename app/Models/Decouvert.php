<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Decouvert extends Model
{
   protected $fillable = [ 'agio', 'date_ok', 'statut', 'dossier_in_id'];
    public $timestamps=false;

   public function dossierIn()
   {
       return $this->belongsTo('App\Models\DossierIn');
   }
}
