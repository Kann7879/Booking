@php
    $sub_title = ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Dashboard';
@endphp

@extends('layout.backend.main', ['title' => 'User | ' . config('app.name'), 'sub_title' => $sub_title
])

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    {{ Breadcrumbs::render(Request::route()->getName()) }}

    <div class="row">
        <div class="col-md-12">
            <div class="nav-align-top">
                <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-2 gap-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);">
                            <i class="icon-base ri ri-group-line icon-sm me-2"></i>Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('acount.security') }}">
                            <i class="icon-base ri ri-lock-line icon-sm me-2"></i>Security
                        </a>
                    </li>
                </ul>
            </div>

            <div class="card mb-6">
                <div class="card-body">
                    <form id="formAccountSettings"
                          method="POST"
                          action="{{ route('acount.store') }}"
                          enctype="multipart/form-data">
                        @csrf

                        {{-- Avatar --}}
                        <div class="d-flex align-items-start align-items-sm-center gap-6 mb-4">
                            <img  src="{{ Auth::user()->foto == '1.png' 
                                        ? asset('assets/img/avatars/' . Auth::user()->foto) 
                                        : asset('storage/uploads/avatars/' . Auth::user()->foto) }}" 
                                 alt="user-avatar"
                                 class="d-block w-px-100 h-px-100 rounded-4"
                                 id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="ri-upload-2-line d-block d-sm-none"></i>
                                    <input type="file" id="upload" name="foto" hidden accept="image/png, image/jpeg" />
                                </label>
                                <div class="form-text">Allowed JPG, PNG. Max size 2 MB.</div>
                            </div>
                        </div>

                        {{-- Fields --}}
                        <div class="row g-5">
                            {{-- Name --}}
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input class="form-control @error('name') is-invalid @enderror"
                                           type="text" id="name" name="name"
                                           value="{{ old('name', Auth::user()->name) }}" />
                                    <label for="name">Full Name</label>
                                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input class="form-control @error('email') is-invalid @enderror"
                                           type="email" id="email" name="email"
                                           value="{{ old('email', Auth::user()->email) }}" />
                                    <label for="email">E-mail</label>
                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Gender --}}
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select id="gender" name="gender" class="form-select select2">
                                        <option value="">-- Choose --</option>
                                        <option value="L" {{ old('gender', Auth::user()->gender) === 'L' ? 'selected' : '' }}>Male</option>
                                        <option value="P" {{ old('gender', Auth::user()->gender) === 'P' ? 'selected' : '' }}>Female</option>
                                    </select>
                                    <label for="gender">Gender</label>
                                </div>
                            </div>

                            {{-- Phone --}}
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input class="form-control @error('phone') is-invalid @enderror"
                                           type="text" id="phone" name="phone"
                                           value="{{ old('phone', Auth::user()->phone) }}" />
                                    <label for="phone">Phone Number</label>
                                    @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- Address --}}
                            <div class="col-12">
                                <div class="form-floating form-floating-outline">
                                    <textarea class="form-control @error('address') is-invalid @enderror"
                                              id="address" name="address"
                                              rows="2">{{ old('address', Auth::user()->address) }}</textarea>
                                    <label for="address">Address</label>
                                    @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="mt-6">
                            <button type="submit" class="btn btn-primary me-3">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    {{-- SweetAlert otomatis --}}
    @if(session('success'))
        <script>
            Swal.fire({ icon: 'success', title: 'Success', text: "{{ session('success') }}" });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({ icon: 'error',   title: 'Error',  text: "{{ session('error') }}" });
        </script>
    @endif
    <script>
    $(document).on('click', '.delete-btn', function (e) {
        e.preventDefault();
        let form = $(this).closest('form');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
    </script>
    <script>
        // Select2
        $(function () {
            $('.select2').select2({
                placeholder: "-- Choose --",
                allowClear: true,
                width: '100%'
            });
        });

        // Preview avatar
        document.getElementById('upload').addEventListener('change', e => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = evt => document.getElementById('uploadedAvatar').src = evt.target.result;
                reader.readAsDataURL(file);
            }
        });
    </script>
@endpush