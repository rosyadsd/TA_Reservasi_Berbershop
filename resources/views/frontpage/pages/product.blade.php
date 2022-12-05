@extends('frontpage.layouts.main')
@section('container')
<h2 class="mb-3 mt-3 fw-bold text-center">Smartphone</h2>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/product" method="GET">
            @if(request('merk_hp'))
                <input type="hidden" name="merk_hp" value="{{ request('merk_hp') }}">
            @endif
            @if(request('tipe_hp'))
                <input type="hidden" name="tipe_hp" value="{{ request('tipe_hp') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value={{ request('search') }}>
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($handphones as $handphone)
            @if($handphone->id %2 !== 0)
                <div class="col">
                    @include('frontpage.components.card')
                    @include('frontpage.components.modal')
                </div>
            @endif
        @endforeach
    </div>
    <div class="row">
        @foreach($handphones as $handphone)
            @if($handphone->id %2 === 0)
                <div class="col">
                    @include('frontpage.components.card')
                    @include('frontpage.components.modal')
                </div>
            @endif
         @endforeach
    </div>
</div>

<div class="d-flex justify-content-center mb-3">
    {{ $handphones->links() }}
</div>

<script type="text/javascript">
    $('#search').on('keyup', function(){
        alert('hello');
    })
</script>
{{-- Modal --}}
@endsection