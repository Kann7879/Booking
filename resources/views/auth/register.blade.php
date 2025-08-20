@extends('layout.auth.main')
@section('container')
<div class="d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Register</h5>
          </div>
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row gy-3">
                <div class="col-12">
                    <label class="form-label">Name</label>
                    <div class="icon-field">
                    <span class="icon">
                        <iconify-icon icon="f7:person"></iconify-icon>
                    </span>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="name">
                    @error('name')
                        <div class="invalid-feedback"> 
                            {{ $message }}
                        </div>
                    @enderror    
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label">Username</label>
                    <div class="icon-field">
                    <span class="icon">
                        <iconify-icon icon="f7:person"></iconify-icon>
                    </span>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Username">
                    @error('username')
                        <div class="invalid-feedback"> 
                            {{ $message }}
                        </div>
                    @enderror 
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label">Email</label>
                    <div class="icon-field">
                    <span class="icon">
                        <iconify-icon icon="mage:email"></iconify-icon>
                    </span>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email')}}" placeholder="Enter Email">
                    @error('email')
                        <div class="invalid-feedback"> 
                            {{ $message }}
                        </div>
                    @enderror    
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label">Password</label>
                    <div class="icon-field">
                    <span class="icon">
                        <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                    </span>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="*******">
                    @error('password')
                        <div class="invalid-feedback"> 
                            {{ $message }}
                        </div>
                    @enderror   
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label">Confrimation Password</label>
                    <div class="icon-field">
                    <span class="icon">
                        <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                    </span>
                    <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="*******">
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary-600" value="Register">Submit</button>
                </div>
                </div>
            </div>
          </form>
        </div>
      </div>
</div>      
@endsection