<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ouvrage ;
class bookController extends Controller
{
    public function index()
    {
        // Récupérer les livres depuis la base de données
        //  $books = Book::all(); // Supposons que vous avez un modèle Book

        return view('library.main'
        // , ['books' => $books]
    );
    }
}
