<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Decouvert extends Model
{
   protected $fillable = ['montant', 'agio', 'date_ok', 'statut', 'membre_id'];
    public $timestamps=false;

   public function membre()
   {
       return $this->belongsTo('App\Models\Membre');
   }
}
