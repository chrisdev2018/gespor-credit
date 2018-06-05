<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Membre;
use Illuminate\Support\Facades\DB;

class MembresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function  displayForm()
    {
        return view('membres.nouveau_membre');
    }

    public function store(Request $request)
    {
        //on recupère les champs qui sont propres au membre
        $membres = [
            'nom'=> $request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'telephone'=>$request->input('telephone'),
            'num_cpte'=>$request->input('num_cpte')
        ];

        $membre=Membre::create($membres);

        return redirect(route('liste_membres'));
    }


    public function list()
    {
        $membres = DB::table('membres')->get();
        return view('membres.liste_membres', compact('membres'));
    }

    public function update(Request $request)
    {
        //mise à jour de la table membre
        $membre = Membre::find($request->input('idmembre'));
        $membre->nom = $request->nom;
        $membre->prenom = $request->prenom;
        $membre->telephone = $request->telephone;
        $membre->num_cpte = $request->num_cpte;
        $membre->save();

        return redirect(route('liste_membres'));

    }
}
