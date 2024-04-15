<?php

namespace App\Http\Controllers;
use App\Models\Ouvrage ;
use Illuminate\Http\Request;

class OuvragesController extends Controller
{
    public function index()
    {
        $ouvrages = ouvrage::all();
        return view('ouvrages.index', compact('ouvrages'));
    }

    public function create()
    {
        return view('ouvrages.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'idouvrage' => 'required|string|max:255',
            'num_l_j' => 'required|string|max:255',
            'title_ouvrage' => 'required|string|max:255',
            'auteur' => 'required|string|max:255',
            'edition_date' => 'required|date',
            'support_accomp' => 'required|string|max:255',
            'quantite' => 'required|integer',
            'recu_le' => 'required|string|max:255',
            'origine' => 'required|string|max:255',
            'code_secteur' => 'required|string|max:255',
            'observations' => 'nullable|string|max:255',
        ]);

        ouvrage::create($validatedData);

        return redirect()->route('ouvrages.index')->with('success', 'Livre ajouté avec succès');
    }

    public function edit($id)
    {
        $ouvrage = ouvrage::findOrFail($id);
        return view('ouvrages.edit', compact('ouvrage'));
    }

    public function show(string $id)
    {
        $ouvrage = ouvrage::findOrFail($id);
        // Passer l'employé à la vue 'employes.show'
        return view('ouvrages.show', compact('ouvrage'));
          //
    }


    public function update(Request $request, $id)
    {
        $ouvrage = ouvrage::findOrFail($id);

        $validatedData = $request->validate([
            'idouvrage' => 'required|string|max:255',
            'num_l_j' => 'required|string|max:255',
            'title_ouvrage' => 'required|string|max:255',
            'auteur' => 'required|string|max:255',
            'edition_date' => 'required|date',
            'support_accomp' => 'required|string|max:255',
            'quantite' => 'required|integer',
            'recu_le' => 'required|string|max:255',
            'origine' => 'required|string|max:255',
            'code_secteur' => 'required|string|max:255',
            'observations' => 'nullable|string|max:255',
        ]);

        $ouvrage->update($validatedData);

        return redirect()->route('ouvrages.index')->with('success', 'Livre mis à jour avec succès');
    }

    public function destroy($id)
    {
        $ouvrage = ouvrage::findOrFail($id);
        $ouvrage->delete();
        return redirect()->route('ouvrages.index')->with('success', 'Livre supprimé avec succès');
    }
}


