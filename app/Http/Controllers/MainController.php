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


class MainController extends Controller
{
    public function home()
    {
        return view('general.home');
    }



    public function test($test)
    {
        dd($test);
        return view('test');
    }

}