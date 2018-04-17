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
    Route::post('Dossiers', 'DossiersController@enregistrer_dossier')->name('enregistrer_dossier');

Route::get('Dossiers_list_all', 'DossiersController@listerDossier')->name('tous_les_dossiers');
    Route::post('modifier', 'DossiersController@modifier_dossier')->name('modifier_dossier');
    Route::post('rejeter', 'DossiersController@rejeter_dossier')->name('rejeter_dossier');
    Route::post('accorder', 'DossiersController@accorder_dossier')->name('accorder_dossier');
    Route::get('checkstatus', 'DossiersController@check_status')->name('check_status');
    Route::get('lister_dossier_ok', 'DossiersController@lister_dossier_ok')->name('lister_dossier_ok');
    Route::get('lister_dossier_out', 'DossiersController@lister_dossier_out')->name('lister_dossier_out');
    Route::get('test', 'DossiersController@test');



//****************************Routes pour la section " suivi" ***************************************************

Route::get('echeancier', 'SuiviController@echeancier')->name('echeancier');



//*******************************Route pour la section "rapports" ******************************************************


