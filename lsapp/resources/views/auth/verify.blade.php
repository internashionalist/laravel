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
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
