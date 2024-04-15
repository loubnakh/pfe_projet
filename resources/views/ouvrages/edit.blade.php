@extends('layouts.app')
@section('title', 'Modifier ouvrages')

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-10">
            <div class="card shadow">
                <div class="card-header">
                    <h1>Modifier l'Ouvrage  <span class="text-warning h1">{{ $ouvrage->nom }}</span> </h1>
                </div> 
                <div class="card-body p-5 ">  
                    <form action="{{ route('ouvrages.update', $ouvrage->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="idouvrage" name="idouvrage" 
                                value="{{ $ouvrage->idouvrage }}" placeholder="idouvrage">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="num_l_j" name="num_l_j" 
                                value="{{ $ouvrage->num_l_j }}" placeholder="num_l_j">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="title_ouvrage" name="title_ouvrage" 
                                value="{{ $ouvrage->title_ouvrage }}" placeholder="title_ouvrage">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="auteur" name="auteur" 
                                value="{{ $ouvrage->auteur }}" placeholder="auteur">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="edition_date" name="edition_date" 
                                value="{{ $ouvrage->edition_date }}"  placeholder="edition_date">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="support_accomp" name="support_accomp" 
                                value="{{ $ouvrage->support_accomp }}" placeholder="support_accomp">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="quantite" name="quantite" 
                                value="{{ $ouvrage->quantite }}" placeholder="quantite">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="recu_le" name="recu_le"
                                value="{{ $ouvrage->recu_le }}" placeholder="recu_le">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="origine" name="origine" 
                                value="{{ $ouvrage->origine }}" placeholder="origine">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="code_Secteur" name="code_Secteur" 
                                value="{{ $ouvrage->code_secteur }}"  placeholder="code Secteur">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="observation" name="observation" 
                                value="{{ $ouvrage->observation }}" placeholder="observation">
                            </div>
                        </div>     
                            <button type="submit" class="btn btn-dark">Enregistrer les modifications</button>
                            <a class="btn btn-warning "  href="{{ route('ouvrages.index') }}">back</a>
                           
                    </form>
                </div> 
            </div> 
        </div>
    </div>   
</div>        
@endsection
