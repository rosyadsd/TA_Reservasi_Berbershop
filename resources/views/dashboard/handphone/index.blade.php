@extends('dashboard.layouts.main')
@section('container')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Handphone</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="table-responsive col-lg-8">
            <a href="/dashboard/handphones/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Handphone</a>
            <a href="/dashboard/handphones/recycle" class="btn btn-success mb-3"><i class="fas fa-trash"></i> Recycle Bin</a>
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-bars"></i> Handphone</div>
                <div class="card-body">
                    <table class="table table-bordered table-sm" id="handphone-table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Harga (Rp.)</th>
                            <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($handphones as $handphone)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $handphone->merk_hp }}</td>
                            <td>{{ $handphone->tipe_hp }}</td>
                            <td>{{ $handphone->rating }}</td>
                            <td>{{ $handphone->harga }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="/dashboard/handphones/{{ $handphone->id }}/edit" class="mx-1 btn btn-warning">Edit</a>
                                <form action="/dashboard/handphones/{{ $handphone->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')">Delete</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
                {{-- <div class="d-flex justify-content-center mb-3">
                    {{ $handphones->links() }}
                </div> --}}
            </div>
        </div>
    </main>
    @include('dashboard.layouts.footer')
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/datatables.min.js"></script>
<script>
    $('#handphone-table').DataTable({});
</script>
@endsection