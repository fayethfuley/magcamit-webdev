@extends('Templates.main')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card p-4 shadow-lg rounded" style="width: 400px">
        <div class="card-body">
            <div class="card-title text-center">
                <h1>Login</h1>
            </div>
            <div class="card-subtitle text-center">
                <p class="text-secondary small">Enter your credentials to sign in to your account</p>
            </div>
            <form method="POST" action="{{ route('pages.submit') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember-password">
                    <label for="remember-password" class="form-check-label">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary mt-2 p-2 w-100 border-0">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection


    