@extends('dashboard.layouts.main')
@section('container')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tempat Sampah</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tempat Sampah</li>
        </ol>

        <div class="table-responsive col-lg-8">
                <table class="table table-striped table-sm">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Barberman</th>
                    <th scope="col">No. Handphone</th>
                    <th scope="col">Umur</th>
                    <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barbers as $barber)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $barber->nama_barber }}</td>
                    <td>{{ $barber->nohp_barber }}</td>
                    <td>{{ $barber->umur }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="/dashboard/barbers/restore/{{ $barber->id }}" class="mx-1 btn btn-success">Restore</a>
                        <form action="/dashboard/barbers/delete/{{ $barber->id }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')">Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                <div class="d-flex justify-content-center mb-3">
                    {{ $barbers->links() }}
                </div>
            </div>
        </div>
    </main>
    @include('dashboard.layouts.footer')
</div>
@endsection