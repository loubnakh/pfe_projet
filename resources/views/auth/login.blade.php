@extends('layouts.app')
@section('title','Login')


@section('content')
<div class="container-fluid">
<div class="row d-flex justify-content-center align-items-center min-vh-100">
<div class="col-lg-5">
<div class="card shadow">
<div class="card-header">
<a href="{{ route('type_employe') }}" class="btn-close fw-bold text-secondary float-end" disabled aria-label="Close"></a>

<div class="text-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle mx-auto" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
    </svg>
    <h4 class="text-center" >{{ $type }}</h4>
    
</div>

</div>
<div class="card-body p-5 ">
 
<form action="" method="POST" id="login_form">

@csrf
<div class="mb-3">

@error('email')
            <span>{{ $message }}</span>
        @enderror 
<input type="numbre" name="Matricule" id="Matricule" class="form-control
rounded-0" placeholder="Matricule">
</div>
<div class="mb-3">
<input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Password">

<div class="invalid-feedback">
</div>
</div>
<!-- Remember Me -->
<div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">Remember me</span>
            </label>
</div> 
        
<div class="invalid-feedback">      
</div>
<div class="mb-3 d-grid">

<input type="submit" value="Login" href="#"  class="btn btn-dark rounded-0"id="login_btn">

</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection


@section('script')
<!-- <script>
$(document).ready(function() {
        $('#password-field').on('change', function() {
            var passwordFieldType = $(this).prop('checked') ? 'text' : 'password';
            $('#password').attr('type', passwordFieldType);
        });
    });
    </script> -->
@endsection

