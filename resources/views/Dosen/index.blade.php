@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-10 m-auto">
            <div class="card">
                <div class="card-header bg-dark-subtle d-flex justify-content-between align-items-center">
                    <h3 class="fw-bold">{{ __('DATA DOSEN') }}</h3>
                    <a class="btn btn-info text-white" href="{{ url('dosen/form') }}">
                        <i class="fa-solid fa-user-plus"></i> Tambah
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIDN</th>
                                <th>Nama</th>
                                <th>Rumpun</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>Aksi</th> {{-- ✅ Tambahan --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dosens as $index => $dosen)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $dosen->nidn }}</td>
                                <td>{{ $dosen->nama }}</td>
                                <td>{{ $dosen->rumpun }}</td>
                                <td>{{ $dosen->email }}</td>
                                <td>{{ $dosen->nohp }}</td>
                                <td>
                                    <a href="{{ url('dosen/' . $dosen->id) }}" class="btn btn-warning btn-sm">Detail</a>
                                    <a href="{{ url('dosen/' . $dosen->id . '/edit') }}" class="btn btn-info btn-sm text-white">Edit</a>
                                    <form action="{{ url('dosen/' . $dosen->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- Tampilkan pesan sukses jika ada --}}
                    @if(session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
