@extends('layouts.app')

@section('content')
<style>
  .splash {
    min-height: calc(100vh - 4rem);
    background: linear-gradient(135deg, #0a2a4f 0%, #0f3b6f 45%, #132f4a 100%);
    padding: 3rem 0;
  }
</style>
<div class="splash">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 text-center">
        
        <img src="{{ asset('laravel_logo.png') }}" alt="Laravel Logo" class="img-fluid mb-4" style="max-width: 300px;">
        
        <div class="card shadow mb-4 d-inline-block">
          <div class="card-body px-4 py-3">
            @if(isset($title))
                <h1 class="mb-2">{{$title}}</h1>
            @endif
            
            <p class="mb-0">This is the Laravel application from the "Laravel From Scratch" Youtube series.</p>
          </div>
        </div>
        
        <div class="mb-4 mx-auto" style="max-width: 960px;">
            <div class="card shadow">
                <div class="card-body p-0">
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
    </div>
  </div>
</div>
@endsection