@extends('layouts.app')

@section('content')
<style>

    .card-header {
        background-color: #007bff;
        color: white;
        font-weight: bold;
        padding: 15px;
        border-radius: 5px 5px 0 0;
    }

    .card-body {
        padding: 20px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .col-form-label {
        padding-top: 10px;
    }

    .invalid-feedback {
        color: #dc3545;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    @media (max-width: 576px) {
        .col-md-4.text-md-end {
            text-align: left;
        }
    }
</style>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Registrasi</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <button class="btn btn-primary w-100 mb-2">Submit</button>
                    <p class="mb-0 text-center">sudah punya akun ? <a href="{{ route('login') }}">login</a></p>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
