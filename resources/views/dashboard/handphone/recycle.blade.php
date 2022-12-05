@extends('dashboard.layouts.main')
@section('container')
<div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Recycle Bin</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Handphone</li>
        </ol>

        <div class="table-responsive col-lg-8">
                <table class="table table-striped table-sm">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Harga</th>
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
                        <a href="/dashboard/handphones/restore/{{ $handphone->id }}" class="mx-1 btn btn-success">Restore</a>
                        <form action="/dashboard/handphones/delete/{{ $handphone->id }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')">Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                <div class="d-flex justify-content-center mb-3">
                    {{ $handphones->links() }}
                </div>
            </div>
        </div>
    </main>
    @include('dashboard.layouts.footer')
</div>
@endsection