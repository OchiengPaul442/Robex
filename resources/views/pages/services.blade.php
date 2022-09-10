@extends('index')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{ $heading }}</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Our Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    {{-- services section --}}
    @include('components.services.services')

    {{-- FAQs section --}}
    @include('components.FAQs.FAQs')
@endsection
