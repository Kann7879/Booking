@extends('layout.auth.main')
@section('container')
<div class="d-flex align-items-center justify-content-center min-vh-100" style="background-color: #f8f9fa;">
    <div class="card shadow rounded" style="width: 400px; background-color: #ffffff;">
        <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 text-center">Reset Password</h3>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ request()->route('token') }}">

                <!-- Email -->
                <div class="form-floating form-floating-outline mb-3">
                    <input type="email" name="email" id="reset-email" value="{{ request()->email }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                    <label for="reset-email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3 form-password-toggle">
                    <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                            <input type="password" name="password" id="reset-password" class="form-control @error('password') is-invalid @enderror" placeholder="Password Baru" required>
                            <label for="reset-password">New Password</label>
                        </div>
                        <span class="input-group-text cursor-pointer">
                            <i class="icon-base ri ri-eye-off-line"></i>
                        </span>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-3 form-password-toggle">
                    <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                            <input type="password" name="password_confirmation" id="reset-password-confirm" class="form-control" placeholder="Konfirmasi Password" required>
                            <label for="reset-password-confirm">Confirm Password</label>
                        </div>
                        <span class="input-group-text cursor-pointer">
                            <i class="icon-base ri ri-eye-off-line"></i>
                        </span>
                    </div>
                </div>

                <div class="d-grid gap-2 mb-3">
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </div>

                <div class="text-center">
                    <a href="{{ route('login') }}" class="text-decoration-none">Back to Login</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
