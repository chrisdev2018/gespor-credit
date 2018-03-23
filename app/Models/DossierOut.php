<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DossierOut extends Model
{
   protected $fillable =['id_dossier_in', 'motif', 'date_out'];

   public function dossierIn()
   {
       return $this->belongsTo('App\Models\DossierIn');
   }
}
