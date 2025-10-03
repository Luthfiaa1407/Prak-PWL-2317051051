@extends('layouts.app')

@section('content')

<!-- Main Content -->
<main>
    <div class="col-lg-5 col-md-7 col-sm-10">
        <div class="card">
            <div class="card-body p-4">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold text-success">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                    </div>

                    <!-- NPM -->
                    <div class="mb-3">
                        <label for="npm" class="form-label fw-semibold text-success">NPM <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="npm" name="npm" placeholder="Contoh: 2117051001" required>
                    </div>

                    <!-- Kelas -->
                    <div class="mb-4">
                        <label for="kelas_id" class="form-label fw-semibold text-success">Kelas <span class="text-danger">*</span></label>
                        <select class="form-select" id="kelas_id" name="kelas_id" required>
                            <option value="" selected disabled>Pilih Kelas</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Actions -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                        <a href="{{ route('user.create') }}" class="btn btn-outline-secondary rounded-3">Kembali</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</main>

@endsection
