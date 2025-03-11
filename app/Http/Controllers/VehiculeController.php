<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class VehiculeController extends Controller
{
    // 
    public function index(){
        return view('Vehicules.vehiculecreate'); 
    }

    public function create(){
        return view('Vehicules.vehiculecreate'); 
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

    public function editVehicule(string $id){
        $vehicule = Vehicule::findOrFail($id);
        return view('Vehicules.edit',[
            'page' => 'Vehicules',
            'vehicule' => $vehicule,
        ]);
    }

    public function update(Request $request, string $id){
        $data = [
                'marque'=> $request->get('marque'),
                'modele'=> $request->get('modele'),
                'immatriculation' => $request->get('immatriculation'),
                'annee'=> $request->get('annee'),
                'couleur'=> $request->get('couleur'),
                'kilometrage'=> $request->get('kilometrage'),
                'carosserie'=> $request->get('carosserie'),
                'energie'=> $request->get('energie'),
                'boite'=> $request->get('boite')
        ];

        DB::beginTransaction();
        try {
            Vehicule::findOrFail($id)->update($data);
            DB::commit();
            return redirect('/')->with('success','voiture a été modifier avec succes');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function destroy(string $id){
        Vehicule::destroy($id);
        return redirect()->route('index')->with('success','voiture a été supprimé avec succes');
    }
}
