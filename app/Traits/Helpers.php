<?php
/**
 * Created by PhpStorm.
 * User: Christian mepat
 * Date: 21/04/2018
 * Time: 14:26
 */

namespace App\Traits;
use Carbon\Carbon;

   trait Helpers
    {
           public function type_credit($code)
        {
            if($code=='CT')
            {return 'Credit de Tresorerie';}
            else if($code=='CS')
            {return 'Credit  Scolaire';}
            else if($code=='MC')
            {return 'Micro-Credit';}
            else if($code=='DE')
            {return 'Decouvert';}

        }

        public function format(Carbon $date)
        {
            return $date->format('m-Y');
        }


    }
