{{-- @extends('layouts.app')

@section('content')
        <h1>About</h1>
        <p> This is the about page</p>
    </body>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
    <h1 class="mb-4">About Laravel</h1>
    <p class="lead mb-4">Laravel is a powerful PHP framework for web application development, known for its elegant syntax and robust features.</p>

    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Key Features of Laravel</h2>
        </div>
        <div class="card-body">
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
@endsection