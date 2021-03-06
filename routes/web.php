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

Auth::routes();



//Route pour la page d'accueil
Route::get('/', 'HomeController@home')->name('home');
Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');


//******************Pour la gestion des membres
Route::get('nouveau_membre', 'MembresController@displayForm')->name('nouveau_membre');
Route::post('enregistrer', 'MembresController@store')->name('enregistrer_membre');
Route::get('liste_membre', 'MembresController@list')->name('liste_membres');
Route::post('modifier_membre', 'MembresController@update')->name('modifier_membre');


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
    Route::get('nouveau_decouvert', 'DossiersController@nouveau_decouvert')->name('nouveau_decouvert');
    Route::post('enregistrer_decouvert', 'DossiersController@enregistrer_decouvert')->name('enregistrer_decouvert');




//****************************Routes pour la section " suivi" ***************************************************

Route::get('echeancier', 'SuiviController@home')->name('echeancier');
Route::post('type_credit/{type_credit}', 'SuiviController@list_membre');
Route::post('echeancier/{type_credit}/{id_membre}', 'SuiviController@echeancier');
Route::post('traites_en_cours', 'SuiviController@traites_en_cours')->name("traites_en_cours");
Route::post('solder_traite', 'SuiviController@solder_traite')->name("solder_traite");

Route::get('choix_traites', 'SuiviController@choix_traites')->name("choix_traites");


Route::get('decouverts_en_cours', 'SuiviController@decouverts_en_cours')->name("decouverts_en_cours");

Route::get('solder_decouvert/{id}', 'SuiviController@solder_decouvert');





//*******************************Route pour la section "rapports" ******************************************************

Route::get('choix_etat', 'RapportsController@choix_etat')->name("choix_etat");

Route::post('afficher_etat', 'RapportsController@afficher_etat')->name("afficher_etat");