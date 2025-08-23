@extends('layout.auth.main')
@section('container')
<div class="d-flex align-items-center justify-content-center min-vh-100" style="background-color: #f8f9fa;">
    <div class="card shadow rounded" style="width: 400px; background-color: #ffffff;">
        <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 text-center">Register</h3>

            <form action="{{ route('register') }}" method="POST">
                @csrf

                <!-- Name -->
                <div class="form-floating form-floating-outline mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Name" />
                    <label>Name</label>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Username -->
                <div class="form-floating form-floating-outline mb-3">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Username" />
                    <label>Username</label>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div class="form-floating form-floating-outline mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" />
                    <label>Email</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3 form-password-toggle">
                    <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="••••••••" aria-describedby="password-toggle" />
                            <label>Password</label>
                        </div>
                        <span class="input-group-text cursor-pointer" id="password-toggle">
                            <i class="icon-base ri ri-eye-off-line"></i>
                        </span>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Confirmation -->
                <div class="mb-3 form-password-toggle">
                    <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="••••••••" aria-describedby="password-confirm-toggle" />
                            <label>Confirm Password</label>
                        </div>
                        <span class="input-group-text cursor-pointer" id="password-confirm-toggle">
                            <i class="icon-base ri ri-eye-off-line"></i>
                        </span>
                    </div>
                </div>

                <!-- Register Button -->
                <div class="d-grid gap-2 mb-3">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

                <!-- Login Link -->
                <div class="text-center">
                    <span>Already have an account?</span>
                    <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm ms-2">Login</a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
