@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
                <div class="card-header bg-dark-subtle">
                    <h3 class="fw-bold text-center">{{ __('FORM TAMBAH DATA DOSEN') }}</h3>
                </div>
                <div class="card-body">
                    <!-- Tampilkan Pesan Sukses -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Tampilkan Pesan Error -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('dosens.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nidn" class="form-label">NIDN</label>
                            <input type="text" name="nidn" class="form-control" id="nidn" value="{{ old('nidn') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Dosen</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection