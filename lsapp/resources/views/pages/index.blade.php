@extends('layouts.app')

@section('content')
<style>
  .splash {
    min-height: calc(100vh - 4rem);
    background: #f5f7fa;
    padding: 3rem 0;
  }

  .hero-card {
    background: linear-gradient(180deg, #ffffff 0%, #f4f8fc 100%);
    border: 2px solid #0a2a4f;
    border-radius: 20px;
    box-shadow: 0 24px 60px rgba(10, 42, 79, 0.15);
    padding: 3rem 2.5rem;
  }

  .hero-card iframe {
    width: 100%;
    height: 540px;
    border: 0;
    display: block;
    border-radius: 14px;
  }

  .hero-media {
    max-width: 960px;
    margin: 0 auto;
  }
</style>
<div class="splash">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 text-center">
        <div class="hero-card">
        <img src="{{ asset('laravel_logo.png') }}" alt="Laravel Logo" class="img-fluid mb-4" style="max-width: 300px;">
        
        @if(isset($title))
            <h1 class="mb-2">{{$title}}</h1>
        @endif
        
        <p class="mb-4">This is the Laravel application from the "Laravel From Scratch" Youtube series.</p>
        
        <div class="hero-media">
            <iframe
                src="https://www.youtube.com/embed/EU7PRmCpx-0?autoplay=1&list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-"
                allowfullscreen
                allow="autoplay">
            </iframe>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection