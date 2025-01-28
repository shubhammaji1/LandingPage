@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row border rounded-5 p-3 w-100 bg-white shadow box-area">
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
            <div class="featured-image mb-3">
                <img src="{{ asset('images/logo/PPF-LOGO.jpg') }}" class="img-fluid" style="width: 350px;">
            </div>
        </div> 
        <div class="col-md-6 right-box">
            @include('partials._login_form', ['activeType' => $activeType ?? 'Student'])
        </div> 
    </div>
</div>
@endsection
