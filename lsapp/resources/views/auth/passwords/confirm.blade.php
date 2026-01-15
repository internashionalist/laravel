@extends('layouts.app')

@section('content')
<style>
  .auth-shell {
    font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  }

  .auth-card {
    border: 2px solid rgba(10, 42, 79, 0.24);
    border-radius: 18px;
    box-shadow: 0 18px 50px rgba(10, 42, 79, 0.10);
    overflow: hidden;
  }

  .auth-card .card-header {
    background: linear-gradient(180deg, rgba(10, 42, 79, 0.10), rgba(10, 42, 79, 0.00));
    border-bottom: 2px solid rgba(10, 42, 79, 0.18);
    color: #0a2a4f;
    font-weight: 600;
  }

  .auth-card .card-body {
    padding: 2rem 2rem 2.25rem;
  }

  .auth-card .form-control {
    border-width: 2px;
    border-radius: 10px;
  }

  .auth-card .btn-primary {
    background-color: #0a2a4f;
    border-color: #0a2a4f;
  }

  .auth-card .btn-primary:hover {
    background-color: #08315e;
    border-color: #08315e;
  }

  .auth-card .btn-link {
    color: #0a2a4f;
    font-weight: 500;
  }

  .auth-card .btn-link:hover {
    color: #08315e;
    text-decoration: underline;
  }
</style>
<div class="container auth-shell">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card auth-card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
