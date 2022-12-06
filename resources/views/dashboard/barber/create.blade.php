@extends('dashboard.layouts.main')
@section('container')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Data Barber</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <section class=" px-5 mx-1">
        <div class="card mb-4 mx-5">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Barberman
            </div>
            <div class="row mb-5 mx-3 mt-3">
                <div class="col-lg-8">
                    <form action="/dashboard/barbers" method="POST">
                        @csrf
                        <div class="mb-3">
                        <label for="nama_barber" class="form-label">Nama Barber</label>
                        <input type="text" name="nama_barber" class="form-control" id="nama_barber" required>
                        <div class="form-text">Tambah Anggota Barbershop</div>
                        </div>
                        <div class="mb-3">
                        <label for="nohp_barber" class="form-label">No. Handphone</label>
                        <input type="text" name="nohp_barber" class="form-control" id="nohp_barber" required>
                        <div class="form-text">Tambah No Handphone Barber</div>
                        </div>
                        <div class="mb-3">
                         <label for="umur" class="form-label">Umur Barber</label>
                         <input type="text" class="form-control" name="umur" id="umur" required>
                         <div class="form-text">Masukan umur, contoh: 20 Tahun</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
    @include('dashboard.layouts.footer')
</div>
@endsection