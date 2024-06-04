<!-- resources/views/anggota_keluargas/index.blade.php -->
@extends('layout.admin2')

@section('content')
@php
use Carbon\Carbon;
@endphp

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1 class="m-0">Anggota Keluarga</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/lingkungans/index">Lingkungan</a></li>
            <li class="breadcrumb-item"><a href="/lingkungans/index">Kepala Keluarga</a></li>
            <li class="breadcrumb-item active">Anggota Keluarga</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <h1 class="text-center mb-4" style="font-family: 'Rowdies', cursive;">Anggota Keluarga___dari Lingkungan____  </h1>

  <div class="container">
  <a type="button" class="btn btn-success mb-2">Tambah Anggota Keluarga</a>
    <div class="table-responsive">
      <table class="table table-striped" id="myTable">
        <thead class="bg-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Status Baptis</th>
            <th scope="col">Status Sidi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($anggotaKeluargas as $index => $anggota)
          <tr>
            <td>{{ $index + $anggotaKeluargas->firstItem() }}</td>
            <td>{{ $anggota->nama }}</td>
            <td>{{ $anggota->jeniskelamin }}</td>
            <td>{{ $anggota->tempatlahir }}</td>
            <td>{{ Carbon::parse($anggota->tanggallahir)->translatedFormat('l, d F Y') }}</td>
            <td>{{ $anggota->baptis }}</td>
            <td>{{ $anggota->sidi }}</td>
            <td>
                <a type="button" class="btn btn-outline-warning waves-effect">Edit</a>
                <a href="#" class="btn btn-outline-danger waves-effec delete">Delete</a>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $anggotaKeluargas->links() }}
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>
@endpush

@push('yu')
<style>
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>
@endpush
