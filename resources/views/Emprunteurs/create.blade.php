@extends('layouts.app')
@section('title','Add Emprunteurs')



@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-10">
            <div class="card shadow">
                <div class="card-header">
                    <h1>Création d'un nouvel Emprunteurs</h1>
                </div>

                <div class="card-body p-5 ">     
                    <form action="{{ route('Emprunteurs.store') }}" method="post">

                    @csrf
                        <div  class="form-row">
                            <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="matricule" name="matricule"
                            required  placeholder="matricule">
                            </div>

                            <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="nom" name="nom"
                            required placeholder="nom">
                            </div>

                            <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="prenom" name="prenom"
                            required placeholder="prenom">
                            </div>

                            <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="code_filiere" name="code_filiere"
                            required  placeholder="code filiere">
                            </div>

                            <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="type_Employe" name="type_Employe"
                            required   placeholder="type Employe">
                            </div>

                            <div class="form-group col-md-6">
                            <input type="password" class="form-control" id="mot_passe" name="mot_passe"
                            required   placeholder="mot passe">
                            </div>

                            <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="telephone" name="telephone"
                            required   placeholder="telephone">
                            </div>

                            <div class="form-group col-md-6">
                            <input type="Email" class="form-control" id="Email" name="Email"
                            required  placeholder="Email">
                            </div>
                        </div>
                    <button type="submit" class="btn btn-dark">Créer</button>
                    <a class="btn btn-warning "  href="{{ route('Emprunteurs.index') }}">back</a>
                    </form>
                </div> 
            </div>
        </div> 
    </div> 
</div>                     
@endsection



@section('script')
@endsection