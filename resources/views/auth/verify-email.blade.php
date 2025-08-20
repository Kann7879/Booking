@extends('layout.auth.main')
@section('container')
<div class="d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Verifikasi Email</h5>
            </div>
            <div class="card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        Link verifikasi baru telah dikirim ke email Anda.
                    </div>
                @endif

                Sebelum melanjutkan, silakan periksa email Anda untuk link verifikasi.
                Jika Anda tidak menerima email,
                <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">klik di sini untuk kirim ulang</button>.
                </form>
            </div>
        </div>
    </div>
</div>
@endsection