<?php

namespace App\Http\Controllers;
use App\Models\Emprunteur ;
use Illuminate\Http\Request;

class emprunteursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Emprunteurs = Emprunteur::all();
        return view('Emprunteurs.index', compact('Emprunteurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Emprunteurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'matricule' => 'required|string|max:10',
            'nom' => 'required|string|max:55',
            'prenom' => 'required|string|max:55',
            'code_filiere' => 'required|string|max:55',
            'type_Employe' => 'required|string|max:55',
            'mot_passe' => 'required|string|max:55',
            'telephone' => 'required|string|max:55',
            'email' => 'required|email',
            
            ]);
            // Créer un nouvel Emprunteur avec les données validées
            Emprunteur::create($validatedData);
            // Rediriger vers la page d'index des Emprunteur
            return redirect()->route('Emprunteurs.index');
        }


        public function edit(string $id)
            {
                $emprunteur = Emprunteur::findOrFail($id);
                return view('Emprunteurs.edit', compact('emprunteur'));
            }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $emprunteur = Emprunteur::findOrFail($id);
        // Passer l'employé à la vue 'employes.show'
        return view('Emprunteurs.show', compact('emprunteur'));
          //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $emprunteurs = Emprunteur::findOrFail($id);
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'matricule' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'code_filiere' => 'required|string|max:255',
            'type_Employe' => 'required|string|max:255',
            'mot_passe' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'email' => 'required|email',
        ]);
        // Mettre à jour les données de l'employé
        $emprunteur->update($validatedData);
        // Rediriger vers la page d'index des employés
        return redirect()->route('Emprunteurs.index')->with('success', 'Emprunteur mis à jour avec succès');
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       // Récupérer l'employé correspondant à l'ID
        $emprunteur = Emprunteur::findOrFail($id);
        // Supprimer l'employé
        $emprunteur->delete();
        // Rediriger vers la page d'index des employés
        return redirect()->route('Emprunteurs.index');

    }
}