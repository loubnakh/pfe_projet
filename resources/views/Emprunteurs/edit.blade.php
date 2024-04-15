@extends('layouts.app')
@section('title', 'Modifier Emprunteur')

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-10">
            <div class="card shadow">
                <div class="card-header">
                    <h1>Modifier l'Emprunteur <span class="text-warning h1">{{ $emprunteur->nom }}</span> </h1>
                </div> 
                <div class="card-body p-5 ">   
                    <form action="{{ route('Emprunteurs.update', $emprunteur->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="matricule" name="matricule" required  placeholder="Matricule" 
                                value="{{ $emprunteur->matricule }}">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="nom" name="nom" required placeholder="Nom" 
                                value="{{ $emprunteur->nom }}">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="prenom" name="prenom" required placeholder="Prénom" 
                                value="{{ $emprunteur->prenom }}">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="code_filiere" name="code_filiere" required placeholder="Code filière" 
                                value="{{ $emprunteur->code_filiere }}">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="type_Employe" name="type_Employe" required placeholder="Type Employé" 
                                value="{{ $emprunteur->type_Employe }}">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="mot_passe" name="mot_passe" required placeholder="Mot de passe" 
                                value="{{ $emprunteur->mot_passe }}">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="telephone" name="telephone" required placeholder="Téléphone"
                                value="{{ $emprunteur->telephone }}">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="Email" name="Email" required placeholder="Email" 
                                value="{{ $emprunteur->Email }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark">Enregistrer les modifications</button>
                        <a class="btn btn-warning "  href="{{ route('Emprunteurs.index') }}">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                

@endsection

@section('script')
<!-- Add any script if needed -->
@endsection
