@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 fw-bold text-center text-success">📋 Daftar Pengguna</h2>

    <div class="card shadow-lg rounded-4 border-0">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-success">
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr class="text-center">
                                <td>{{ $user->id }}</td>
                                <td class="fw-semibold">{{ $user->nama }}</td>
                                <td>{{ $user->nim }}</td>
                                <td>
                                    <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">
                                        {{ $user->nama_kelas }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">
                                    <i class="bi bi-exclamation-circle"></i> Belum ada data pengguna
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
