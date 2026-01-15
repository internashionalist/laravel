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
</style>
<div class="container auth-shell">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card auth-card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
