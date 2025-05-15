@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
                <div class="card-header bg-dark-subtle">
                    <h3 class="float-start fw-bold">{{ __('DATA DOSEN') }}</h3>
                    <span class="float-end btn btn-primary">
                        <a class="text-light" href="Dosen/tambah"> <i class="fa-solid fa-user-plus"></i> Tambah </a>
                    </span>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIDN</th>
                                <th>Nama</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dosens as $dosen)
                            <tr>
                                <td>{{ $dosen->id }}</td>
                                <td>{{ $dosen->nidn }}</td>
                                <td>{{ $dosen->nama }}</td>
                                <td>{{ $dosen->email }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection