@extends('dashboard.layouts.main')
@section('container')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Data Handphone</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <section class=" px-5 mx-1">
        <div class="card mb-4 mx-5">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Handphone
            </div>
            <div class="row mb-5 mx-3 mt-3">
                <div class="col-lg-8">
                    <form action="/dashboard/handphones" method="POST">
                        @csrf
                        <div class="mb-3">
                        <label for="merk_hp" class="form-label">Merk Handphone</label>
                        <input type="text" name="merk_hp" class="form-control" id="merk_hp" required>
                        <div class="form-text">Merek HP terbaru</div>
                        </div>
                        <div class="mb-3">
                        <label for="tipe_hp" class="form-label">Tipe Handphone</label>
                        <input type="text" name="tipe_hp" class="form-control" id="tipe_hp" required>
                        <div class="form-text">Tipe HP terbaru</div>
                        </div>
                        <label for="tipe_hp" class="form-label">Rating</label>
                        <div class="mb-3">
                            @for($i=0; $i<=5; $i++)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rating" id="rating{{ $i }}" value={{ $i }}>
                                    <label class="form-check-label" for="rating{{ $i }}">{{ $i }}</label>
                                </div>
                            @endfor
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" class="form-control" name="harga" id="harga" required>
                                <div class="form-text">Masukan harga, contoh: 1.000.000</div>
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