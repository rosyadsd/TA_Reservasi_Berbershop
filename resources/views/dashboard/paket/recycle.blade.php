@extends('dashboard.layouts.main')
@section('container')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tempat Sampah</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Paket Barbershop</li>
        </ol>

        <div class="table-responsive col-lg-8">
                <table class="table table-striped table-sm">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Paket</th>
                    <th scope="col">Deskripsi Paket</th>
                    <th scope="col">Harga</th>
                    <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pakets as $paket)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $paket->nama_paket }}</td>
                    <td>{{ $paket->keterangan_paket }}</td>
                    <td>{{ $paket->harga }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="/dashboard/pakets/restore/{{ $paket->id }}" class="mx-1 btn btn-success">Restore</a>
                        <form action="/dashboard/pakets/delete/{{ $paket->id }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah Admin Yakin Menghapusnya ?')">Hapus</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                <div class="d-flex justify-content-center mb-3">
                    {{ $pakets->links() }}
                </div>
            </div>
        </div>
    </main>
    @include('dashboard.layouts.footer')
</div>
@endsection