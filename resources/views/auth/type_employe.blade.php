@extends('layouts.app')
@section('title','type_employe')


@section('content')
<div class="container-fluid ">
<div class="row d-flex justify-content-center align-items-center min-vh-100">
<div class="col-lg-5 ">
<div class="card shadow">
        <div class="card-header">
            <a href="{{ route('library.index') }}" class="btn-close fw-bold text-secondary float-end" disabled aria-label="Close"></a>
            <h2 class="fw-bold text-secondary">Sélectionnez un rôle :</h2>
        </div>
       
        <div class="card-body p-5 ">
        @csrf
        <div class="row">
            <div class="mb-3">
            <div class="form-check from-check-inline">
                <h4> 
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"onclick="window.location.href='{{ route('login.type', ['type' => 'Employe']) }}'"  value="Employe">
                    <label class="form-check-label  " for="flexRadioDefault1">Employe</label>
                 </h4>
            </div>
            </div>
            <div class="mb-3 ">
            <div class="form-check rom-check-inline">
                <h4>    
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" onclick="window.location.href='{{ route('login.type', ['type' => 'Stagiaires']) }}'"  value="Stagiaires" checked>
                    <label class="form-check-label " for="flexRadioDefault2">Stagiaires</label>
                </h4>
            </div>
            </div>
        </div>
</div>
</div>
</div>
</div>
</div>


@endsection