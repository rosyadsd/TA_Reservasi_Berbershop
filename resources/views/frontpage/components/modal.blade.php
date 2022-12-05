<!-- Modal -->
<div class="modal fade" id="beliModal{{ $handphone->id }}" tabindex="-1" aria-labelledby="beliProduk" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="beliProduk">Beli Handphone</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form action="/dashboard/invoices" method="POST">
        @csrf
        <div class="mb-3">
            <label for="merk_hp" class="form-label">Merk Handphone</label>
            <input type="text" class="form-control" id="merk_hp" aria-describedby="merk_hp" name="merk_hp" value="{{ $handphone->merk_hp }}" readonly>
          </div>
          <div class="mb-3">
            <label for="tipe_hp" class="form-label">Tipe Handphone</label>
            <input type="text" class="form-control" id="tipe_hp" aria-describedby="tipe_hp" name="tipe_hp" value="{{ $handphone->tipe_hp }}" readonly>
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" aria-describedby="harga" name="harga" value="{{ $handphone->harga }}" readonly>
          </div>
          <div class="mb-3">
            <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
            <input type="text" class="form-control" id="nama_pembeli" aria-describedby="nama_pembeli" name="nama_pembeli" required>
          </div>
          <div class="mb-3">
            <label for="nohp_pembeli" class="form-label">No Hp Pembeli</label>
            <input type="text" class="form-control" id="nohp_pembeli" aria-describedby="nohp_pembeli" name="nohp_pembeli" required>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Beli Produk</button>
              {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          </div>
    </form>
    </div>
    </div>
</div>
</div>
  