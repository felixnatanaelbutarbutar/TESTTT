@extends('layout.admin2')

@section('content')
<div class="container">
    <h2>Create Anggota Keluarga</h2>
    <form action="{{ route('lingkungans.kepala_keluargas.anggota_keluargas.store', [$lingkunganId, $kepalaKeluargaId]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="jeniskelamin">Jenis Kelamin:</label>
            <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" required>
        </div>
        <div class="form-group">
            <label for="tempatlahir">Tempat Lahir:</label>
            <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" required>
        </div>
        <div class="form-group">
            <label for="tanggallahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" required>
        </div>
        <div class="form-group">
            <label for="baptis">Status Baptis:</label>
            <input type="text" class="form-control" id="baptis" name="baptis" required>
        </div>
        <div class="form-group">
            <label for="sidi">Status Sidi:</label>
            <input type="text" class="form-control" id="sidi" name="sidi" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
