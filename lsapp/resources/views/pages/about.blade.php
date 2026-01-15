@extends('layouts.app')

@section('content')
<style>
  /* page-scoped styling for About page */
  .about-shell {
    font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    padding: 2.25rem 0;
  }

  .about-card {
    background: #ffffff;
    border: 2px solid rgba(10, 42, 79, 0.24);
    border-radius: 18px;
    box-shadow: 0 18px 50px rgba(10, 42, 79, 0.10);
    overflow: hidden;
  }

  .about-header {
    padding: 2rem 2rem 1.25rem;
    background: linear-gradient(180deg, rgba(10, 42, 79, 0.10), rgba(10, 42, 79, 0.00));
    border-bottom: 2px solid rgba(10, 42, 79, 0.18);
  }

  .about-accent {
    color: #0a2a4f;
  }

  .about-body {
    padding: 1.75rem 2rem 2rem;
  }

  .about-body .card,
  .about-body .list-group-item,
  .about-body .card-header,
  .about-body .card-footer {
    border-color: rgba(10, 42, 79, 0.20);
  }

  .about-body .card {
    border-width: 2px;
    border-radius: 16px;
    overflow: hidden;
  }

  .about-body .card-header {
    background: rgba(10, 42, 79, 0.06);
    border-bottom-width: 2px;
  }

  .about-body .card-footer {
    background: rgba(10, 42, 79, 0.03);
    border-top-width: 2px;
  }

  .about-body .list-group-item {
    border-left: 0;
    border-right: 0;
    border-top: 0;
    border-bottom-width: 2px;
  }

  .about-body .lead {
    color: rgba(10, 42, 79, 0.85);
  }
</style>

<div class="about-shell">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 text-center">
        <div class="about-card">
          <div class="about-header">
            <h1 class="mb-4 about-accent">About Laravel</h1>
            <p class="lead mb-0">Laravel is a powerful PHP framework for web application development, known for its elegant syntax and robust features.</p>
          </div>

          <div class="about-body text-left">
            <div class="card">
              <div class="card-header">
                <h2 class="mb-0 about-accent">Key Features of Laravel</h2>
              </div>

              <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <strong>Eloquent ORM:</strong> A powerful Active Record implementation for database interactions.
                  </li>
                  <li class="list-group-item">
                    <strong>Blade Templating Engine:</strong> A lightweight yet powerful templating system for building dynamic views.
                  </li>
                  <li class="list-group-item">
                    <strong>Routing System:</strong> A flexible and intuitive way to define application routes.
                  </li>
                  <li class="list-group-item">
                    <strong>Middleware & Authentication:</strong> Built-in user authentication and middleware for security.
                  </li>
                  <li class="list-group-item">
                    <strong>Queue Management:</strong> Handles background jobs efficiently with queues.
                  </li>
                  <li class="list-group-item">
                    <strong>Task Scheduling:</strong> Automates repetitive tasks using Laravel's scheduler.
                  </li>
                  <li class="list-group-item">
                    <strong>RESTful API Support:</strong> Provides tools to build and consume APIs easily.
                  </li>
                  <li class="list-group-item">
                    <strong>Robust Testing Framework:</strong> Offers built-in PHPUnit support for application testing.
                  </li>
                </ul>
              </div>

              <div class="card-footer">
                <p class="mb-0">Laravel is widely used in the PHP ecosystem due to its developer-friendly approach, extensive documentation, and active community. It is ideal for both small projects and large-scale enterprise applications.</p>
              </div>
            </div>
          </div>
        </div><!-- /about-card -->
      </div>
    </div>
  </div>
</div>
@endsection