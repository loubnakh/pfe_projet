@extends('layouts.app')
@section('title','Add Ouvrage')


@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-10">
            <div class="card shadow">
                <div class="card-header">
                    <h1>Création d'un nouvel Ouvrage</h1>
                </div> 
                <div class="card-body p-5 ">       
                        <form action="{{ route('ouvrages.store') }}" method="POST">
                            @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">    
                                <input type="text" class="form-control" id="idouvrage" name="idouvrage"
                                required  placeholder="idouvrage">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="num_l_j" name="num_l_j"
                                required  placeholder="num_l_j">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="title_ouvrage" name="title_ouvrage"
                                required  placeholder="title ouvrage">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="auteur" name="auteur"
                                required  placeholder="auteur">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="edition_date" name="edition_date"
                                required  placeholder="edition date">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="support_accomp" name="support_accomp" 
                                required  placeholder="support accomp">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="quantite" name="quantite"
                                required  placeholder="quantite">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="recu_le" name="recu_le" 
                                required  placeholder="recu le">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="origine" name="origine" 
                                required  placeholder="origine">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="code_Secteur" name="code_Secteur"
                                required  placeholder="code Secteur">
                            </div>
                            <div class="form-group col-md-6">
                                <textarea class="form-control" placeholder="observation" id="observation" style="height: 100px"  required></textarea>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-dark">Créer</button>
                            <a class="btn btn-warning "  href="{{ route('ouvrages.index') }}">back</a>
                        </form>
                </div>        
            </div>       
        </div> 
    </div>     
</div>         
@endsection