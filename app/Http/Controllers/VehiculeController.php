<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class VehiculeController extends Controller
{
    // 
    public function index(){
        return view('vehiculecreate'); 
    }

    public function createVehicule(Request $request){
        $validator = Validator::make($request->all(), [
            'modele'=> 'required|string|max:30|min:3'         ,
            'annee'=> 'required|integer',
            'couleur' => 'required|string',
            'immatriculation' => 'required|string',
            'marque' => 'required|string',
            'kilometrage' => 'required|integer',
            'carosserie' => 'required|string',
            'boite' => 'required|string',
        ]);

        $vehicule = new Vehicule([
                'marque'=> $request->get('marque'),
                'modele'=> $request->get('modele'),
                'immatriculation' => $request->get('immatriculation'),
                'annee'=> $request->get('annee'),
                'couleur'=> $request->get('couleur'),
                'kilometrage'=> $request->get('kilometrage'),
                'carosserie'=> $request->get('carosserie'),
                'energie'=> $request->get('energie'),
                'boite'=> $request->get('boite')
        ]);
        $vehicule->save();
        

        return redirect()->route('afficherV')->with('success','voiture a été ajouter avec succes');
    }
}
