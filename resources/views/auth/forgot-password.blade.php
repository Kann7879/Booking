@extends('layout.auth.main')
@section('container')
<div class="d-flex align-items-center justify-content-center min-vh-100" style="background-color: #f8f9fa;">
    <div class="card shadow rounded" style="width: 400px; background-color: #ffffff;">
        <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 text-center">Forgot Password</h3>

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <!-- Email -->
                <div class="form-floating form-floating-outline mb-3">
                    <input type="email" name="email" id="forgot-email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" required autofocus>
                    <label for="forgot-email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid gap-2 mb-3">
                    <button type="submit" class="btn btn-primary">Send Reset Link</button>
                </div>

                <div class="text-center">
                    <a href="{{ route('login') }}" class="text-decoration-none">Back to Login</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
