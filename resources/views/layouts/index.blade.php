@extends('layouts.app')
@section('title','library')


@section('content')
<header>
@include('layouts.header')
</header>
<div class="row ">

<!--les livres -->
@include('layouts.bady')
</div >

	
	<!-- Contact starts -->
	<div class="contact section-padding" id="contact">
		<div class="container mt-5 mb-5">
		@include('layouts.Contact')
			</div>
		</div>
</div><!-- contact ends -->
	<!-- footer starts -->
	<footer class="bg-dark p-2 text-center">
	@include('layouts.footer')
	</footer>
@endsection


@section('script')

@endsection