@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title fw-bold">Home Page</h1>
            </div>
        </div>
    </div>
    
@endsection

@push('css')
    <style>
        .page-title {
            padding-top: 10vh;
            font-size: 5rem;
            color: #2b3e23;
        }
    </style>
@endpush