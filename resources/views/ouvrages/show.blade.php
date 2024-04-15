@extends('layouts.app')
@section('title','Détails  Empeunteurs')

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-header">
                    <h1 class="text-center">Détails de l'Emprunteur <span class="text-warning h1">{{ $ouvrage->nom }}</span> </h1>
                </div> 

                <div class="card-body p-5 ">
            
                    <ul>
                        <li>idouvrage: {{ $ouvrage->idouvrage }}</li>
                        <li>num_l_j: {{ $ouvrage->num_l_j }}</li>
                        <li>title_ouvrage: {{ $ouvrage->title_ouvrage }}</li>
                        <li>auteur: {{ $ouvrage->auteur }}</li>
                        <li>edition_date: {{ $ouvrage->edition_date }}</li>
                        <li>support_accomp: {{ $ouvrage->support_accomp }}</li>
                        <li>quantite: {{ $ouvrage->quantite }}</li>
                        <li>recu_le: {{ $ouvrage->recu_le }}</li>
                        <li>origine: {{ $ouvrage->origine }}</li>
                        <li>codeSecteur: {{ $ouvrage->code_secteur }}</li>
                        <li>observation: {{ $ouvrage->observation }}</li>
                    </ul>
                    <div class="d-flex justify-content ">
                        <a   class="btn btn-dark " href="{{ route('ouvrages.edit', $ouvrage) }}">Modifier</a>
                        <a class="btn btn-warning "  href="{{ route('ouvrages.index') }}">back</a>
                        <form action="{{ route('ouvrages.destroy', $ouvrage)">
                </div>
                </div>
            </div> 
        </div>
    </div> 
</div>


@endsection

@section('script')

@endsection