@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <img src="{{ asset('laravel_logo.png') }}" alt="Laravel Logo" class="img-fluid mb-4" style="max-width: 300px;">
            
            @if(isset($title))
                <h1 class="mb-4">{{$title}}</h1>
            @endif
            
            <p class="mb-4">This is the Laravel application from the "Laravel From Scratch" Youtube series.</p>
            
            <div class="mb-4" style="max-width: 960px; margin: 0 auto; border: 2px solid #0a2a4f; border-radius: 14px; overflow: hidden; box-shadow: 0 10px 30px rgba(10, 42, 79, 0.25);">
                <iframe
                    src="https://www.youtube.com/embed/EU7PRmCpx-0?autoplay=1&list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-"
                    style="width: 100%; height: 540px; border: 0; display: block;"
                    allowfullscreen
                    allow="autoplay">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection