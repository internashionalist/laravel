@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <img src="{{ asset('storage/Laravel.png') }}" alt="Laravel Logo" class="img-fluid mb-4" style="max-width: 300px;">
            
            @if(isset($title))
                <h1 class="mb-4">{{$title}}</h1>
            @endif
            
            <p class="mb-4">This is the Laravel application from the "Laravel From Scratch" Youtube series</p>
            
            <div class="embed-responsive embed-responsive-16by9 mb-4">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EU7PRmCpx-0?autoplay=1&list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-" allowfullscreen allow="autoplay"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection