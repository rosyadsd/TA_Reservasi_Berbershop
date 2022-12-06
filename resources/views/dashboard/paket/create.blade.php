@extends('dashboard.layouts.main')
@section('container')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Penambahan Data Paket</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <section class=" px-5 mx-1">
        <div class="card mb-4 mx-5">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Paket Barbershop
            </div>
            <div class="row mb-5 mx-3 mt-3">
                <div class="col-lg-8">
                    <form action="/dashboard/pakets" method="POST">
                        @csrf
                        <div class="mb-3">
                        <label for="nama_paket" class="form-label">Nama Paket</label>
                        <input type="text" name="nama_paket" class="form-control" id="nama_paket" required>
                        <div class="form-text">Nama Paket Terbaru</div>
                        </div>
                        <div class="mb-3">
                        <label for="keterangan_paket" class="form-label">Keterangan Dari Paket</label>
                        <input type="text" name="keterangan_paket" class="form-control" id="keterangan_paket" required>
                        <div class="form-text">Keterangan Paket Terbaru</div>
                        <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" id="harga" required>
                        <div class="form-text">Masukan harga Paket, contoh: 30.000</div>
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