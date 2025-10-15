@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h2 class="mb-4 fw-bold text-center text-success">Edit Pengguna</h2>

  {{-- Notifikasi sukses atau gagal --}}
  @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
      </div>
  @endif

  @if (session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
      </div>
  @endif

  <div class="card shadow-lg rounded-4 border-0"">
    <div class="card-body">
      <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="nama" class="form-label fw-semibold">Nama Pengguna</label>
          <input type="text" id="nama" name="nama" 
                 value="{{ $user->nama }}" 
                 class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="nim" class="form-label fw-semibold">NIM</label>
          <input type="text" id="nim" name="nim" 
                 value="{{ $user->nim }}" 
                 class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
          <select id="kelas_id" name="kelas_id" class="form-select" required>
            @foreach ($kelas as $k)
              <option value="{{ $k->id }}" 
                {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                {{ $k->nama_kelas }}
              </option>
            @endforeach
          </select>
        </div>

        <div class="d-flex justify-content-between mt-4">
          <a href="{{ '/user' }}" class="btn btn-secondary px-4">Kembali</a>
          <button type="submit" class="btn btn-primary px-4" style="background-color: #d4f5d0; color: #000;">Update</button>

        </div>
      </form>
    </div>
  </div>
</div>
@endsection
