<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
  protected $fillable = ['nom', 'prenom', 'telephone', 'num_cpte'];
    public $timestamps=false;

    public function dossierIn()
    {
        return $this->hasMany('App\Models\DossierIn');
    }
}
