<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DossierOut extends Model
{
   protected $fillable =['motif', 'date_out', 'dossier_in_id'];

   public function dossierIn()
   {
       return $this->belongsTo('App\Models\DossierIn');
   }
}
