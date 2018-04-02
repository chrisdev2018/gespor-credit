<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/login', function () {
    return view('welcome');
});*/
//list des actions


//Route pour la page d'accueil
Route::get('/', 'MainController@home')->name('home');


//****************************Routes pour la section "dossiers" *********************************************
Route::get('Dossiers_new', 'DossiersController@displayForm')->name('nouveau_dossier');
Route::post('Dossiers', 'DossiersController@store')->name('store');
Route::get('Dossiers_list_all', 'DossiersController@listerDossier')->name('tous_les_dossiers');
Route::get('Dossier_a_traiter','DossiersController@dossier_a_traiter')->name('dossier_a_traiter');
Route::get('Dossier_a_modifier/{membre}/{dossier}', 'DossiersController@dossier_a_modifier')->name('dossier_a_modifier');
Route::post('', 'DossiersController@modifier_dossier')->name('modifier_dossier');





//****************************Routes pour la section " suivi" ***************************************************





//*******************************Route pour la section "rapports" ******************************************************


