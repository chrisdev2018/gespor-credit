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
        return view('membres.liste_membres');
    }
}
