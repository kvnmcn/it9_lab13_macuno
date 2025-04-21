@extends('layouts.app')

@section('content')
<div class="auth-card">
    <h1 class="text-center mb-4">Login</h1>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->has('credentials'))
    <div class="alert alert-danger">{{ $errors->first('credentials') }}</div>
    @endif

    <form method="POST" action="/login">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="Enter email" required>
        </div>

        <div class="mb-3 position-relative">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
                <input id="password" name="password" type="password" class="form-control" placeholder="Enter password"
                    required>
                <span class="input-group-text bg-transparent border-start-0" style="cursor: pointer"
                    id="togglePassword">
                    <i class="bi bi-eye-slash text-light" id="eyeIcon"></i>
                </span>
            </div>
        </div>


        <div class="d-grid">
            <button type="submit" class="btn btn-accent">Login</button>
        </div>
    </form>

    <p class="mt-3 text-center">
        Don't have an account?
        <a href="{{ route('showRegister') }}" class="link-accent">Register here</a>
    </p>
</div>
@endsection