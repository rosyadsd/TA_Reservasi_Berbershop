<div class="card mb-3" style="width: 15rem;">
    <!-- Product image-->
    <img class="card-img-top" src="https://images.bisnis.com/upload/img/Apple_iPhone-11-Pro_Colors_091019_big.jpg.large.jpg" alt="..." />
    {{-- <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." /> --}}
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h5 class="fw-bolder">{{ $handphone->merk_hp }}</h5>
            <h5 class="fw-bolder">{{ $handphone->tipe_hp }}</h5>
            <!-- Product reviews-->
            <div class="d-flex justify-content-center small text-warning mb-2">
                @for($i=1; $i<=$handphone->rating; $i++)
                    <div class="bi-star-fill"></div>
                @endfor
                @if(5-$handphone->rating>=1)
                    @for($i=1; $i<=5-$handphone->rating; $i++)
                        <div class="bi-star"></div>
                    @endfor
                @endif
            </div>
            <!-- Product price-->
            Rp. {{ $handphone->harga }}
        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center"><button class="btn btn-outline-dark mt-auto" data-bs-toggle="modal" data-bs-target="#beliModal{{ $handphone->id }}">Beli</button></div>
    </div>
</div>