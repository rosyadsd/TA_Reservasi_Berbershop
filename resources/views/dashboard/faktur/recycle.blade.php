@extends('dashboard.layouts.main')
@section('container')
<div id="layoutSidenav_content">
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Penolakan Reservasi</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="table-responsive col-lg-12">
            <div class="card mb-4">
                <div class="card-header">Penolakan Reservasi</div>
                <div class="card-body">
                    <table class="table table-bordered table-sm" id="recycle-table">
                        <thead>
                            <tr>
                            <th scope="col"># </th>
                            <th scope="col">No. Reservasi</th>
                            <th scope="col">Disetujui Oleh</th>
                            <th scope="col">Tanggal Pemesanan</th>
                            <th scope="col">Tanggal Dihapus</th>
                            <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fakturs as $faktur)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $faktur->id }}</td>
                            <td>{{ $faktur->persetujuan }}</td>
                            <td>{{ $faktur->created_at->toDateString() }}</td>
                            <td>{{ $faktur->deleted_at->toDateString() }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#detail{{ $faktur->id }}" class="btn btn-warning">Detail</a>
                                <a href="/dashboard/fakturs/restore/{{ $faktur->id }}" class="mx-1 btn btn-success">Restore</a>
                                <form action="/dashboard/fakturs/delete/{{ $faktur->id }}" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')">Delete</button>
                                </form>
                            </td>
                            </tr>
                            {{-- Modal --}}
                            @include('dashboard.faktur.modal')
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/datatables.min.js"></script>
<script>
    $('#recycle-table').DataTable({});
</script>
</main>
    @include('dashboard.layouts.footer')
</div>
@endsection