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
                    <a href="">Our Team</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    {{-- team section --}}
    @include('components.team.team')
@endsection
