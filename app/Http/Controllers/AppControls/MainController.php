<?php
/**
 * Created by PhpStorm.
 * User: Christian mepat
 * Date: 29/01/2018
 * Time: 19:05
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


class MainController extends Controller
{
    public function home()
    {

        return view('home');

    }



    public function test()
    {
        return view('test');
    }

}