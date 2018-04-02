<?php
    /**
     * Created by PhpStorm.
     * User: Christian mepat
     * Date: 29/03/2018
     * Time: 18:11
     */

    namespace App\Utils;


    use Illuminate\Database\Eloquent\Model;

    class Dossier extends Model
    {
       public $idmembre;
       public $nom;
       public $prenom;
       public $telephone;
       public $iddossier;
       public $numcpte;




    }