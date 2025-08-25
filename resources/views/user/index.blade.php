@php
    $sub_title = ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Dashboard';
@endphp

@extends('layout.backend.main', ['title' => 'User | ' . config('app.name'), 'sub_title' => $sub_title
])

@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
     {{ Breadcrumbs::render(Request::route()->getName()) }}
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar User</h5>
            <a href="{{ route('user.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-datatable text-nowrap">
            <table class="datatables-basic table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $user->foto) }}" alt="Foto" width="40" height="40" class="rounded-circle">
                            </td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection