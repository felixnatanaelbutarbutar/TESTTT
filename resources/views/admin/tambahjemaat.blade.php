{{-- @extends('layout.admin') --}}
@extends('layout.admin2')

@section('content')
        
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Jemaat</li>
              <li class="breadcrumb-item active">Tambah Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  <h1 class="text-center mb-4"style="font-family: 'Josefin Sans', sans-serif;">Tambah Data Jemaat</h1>

  <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="/insertdata" method="POST" enctype="multipart/form-data">
              @csrf <!-- pengiriman data berupa photo -->
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <select class="form-control select2" name="jeniskelamin" aria-label=".form-select-lg example">
                  <option selected>Pilih Jenis Kelamin </option>
                  <option value="1">Laki-laki</option>
                  <option value="2">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tanggal" id="exampleInputPassword1">
              </div> 
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Status Baptis</label>
                <select class="form-control select2" name="baptis" style="width: 100%;">
                  <option selected>Pilih Status Baptis</option>
                  <option value="1">Sudah Baptis</option>
                  <option value="2">Belum Baptis</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Status Sidi</label>
                <select class="form-control select2" name="sidi" style="width: 100%;">
                  <option selected>Pilih Status Sidi</option>
                  <option value="1">Sudah Sidi</option>
                  <option value="2">Belum Sidi</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                <input type="number" class="form-control" name="notelpon" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              @error('notelpon')
              <span class="text-danger" > {{ $message }}</span>                    
            @enderror
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pelean Taon</label>
                <input type="number" class="form-control" name="peleantaon" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <br>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
      </div>
    </div>
  

    
@endsection
@push('scriptssss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
const form = document.querySelector('form');
const nama = document.querySelector('[name="nama"]');
const jeniskelamin = document.querySelector('[name="jeniskelamin"]');
const alamat = document.querySelector('[name="alamat"]');
const notelpon = document.querySelector('[name="notelpon"]');

form.addEventListener('submit', (event) => {
if (nama.value === '' || jeniskelamin.value === 'Pilih Jenis Kelamin' || alamat.value === '' || notelpon.value === '') {
  event.preventDefault();
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Harap isi semua data yang diperlukan!'
  });
}
});
</script>
    
@endpush