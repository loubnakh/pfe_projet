@extends('layouts.app')
@section('title','Détails  Empeunteurs')

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-header">
                    <h1 class="text-center">Détails de l'Emprunteur <span class="text-warning h1">{{ $emprunteur->nom }}</span> </h1>
                </div> 

                <div class="card-body p-5 ">
            
                    <ul>
                        <li>matricule: {{ $emprunteur->matricule }}</li>
                        <li>Nom: {{ $emprunteur->nom }}</li>
                        <li>prenom: {{ $emprunteur->prenom }}</li>
                        <li>code_filiere: {{ $emprunteur->code_filiere }}</li>
                        <li>type_Employe: {{ $emprunteur->type_Employe }}</li>
                        <li>mot_passe: {{ $emprunteur->mot_passe }}</li>
                        <li>telephone: {{ $emprunteur->telephone }}</li>
                        <li>Email: {{ $emprunteur->Email }}</li>
                    </ul>
                    <div class="d-flex justify-content ">
                        <a   class="btn btn-dark " href="{{ route('Emprunteurs.edit', $emprunteur) }}">Modifier</a>
                        <a class="btn btn-warning "  href="{{ route('Emprunteurs.index') }}">back</a>
                        <form action="{{ route('Emprunteurs.destroy', $emprunteur)">
                </div>
                </div>
            </div> 
        </div>
    </div> 
</div>


@endsection

@section('script')

@endsection