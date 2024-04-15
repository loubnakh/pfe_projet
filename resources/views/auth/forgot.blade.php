@extends('layouts.app')
@section('title','Forgot password')


@section('content')
<div class="container-fluid">
<div class="row d-flex justify-content-center align-items-center min-vh-100">
<div class="col-lg-4">
<div class="card shadow">
<div class="card-header">
<h2 class="fw-bold text-secondary"> Forgot password</h2>
</div>
<div class="card-body p-5 ">
<form action="#" method="POST" id="forgot_form">

@csrf
<div class="mb-3 text-secondary">
    entrer your e-mail address and we will send you a link to reset your password
</div>
<div class="mb-3 ">

<input type="email" name="email" id="email" class="form-control

rounded-0" placeholder="">

<div class="invalid-feedback"></div>

</div>

<div class="mb-3 d-grid">

<input type="submit" value="reset password" class="btn btn-dark
 rounded-0" id="forgot_btn">

</div>
<div class='text-centre text-secondary'>
    <div>back to <a href="/login" class='text-decoration-none'>login page</a>

    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection


@section('script')

@endsection