<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Decouvert extends Model
{
   protected $fillable = ['id_dossier_in', 'agio', 'date_ok', 'statut'];

   public function dossierIn()
   {
       return $this->belongsTo('App\Models\DossierIn');
   }
}
