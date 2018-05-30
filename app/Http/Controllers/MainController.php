<?php
/**
 * Created by PhpStorm.
 * User: Christian mepat
 * Date: 29/01/2018
 * Time: 19:05
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Traits\Helpers;


class MainController extends Controller
{
    use Helpers;
    public function home()
    {
        return view('general.home');
    }



    public function test()
    {

    }

}