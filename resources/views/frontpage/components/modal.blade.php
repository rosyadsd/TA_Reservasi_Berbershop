<!-- Modal -->
<div class="modal fade" id="beliModal{{ $paket->id }}" tabindex="-1" aria-labelledby="beliProduk" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="beliProduk">Pesan Reservasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form action="/dashboard/reservasis" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_paket" class="form-label">Paket Barber</label>
            <input type="text" class="form-control" id="nama_paket" aria-describedby="nama_paket" name="nama_paket" value="{{ $paket->nama_paket }}" readonly>
          </div>
          <div class="mb-3">
            <label for="keterangan_paket" class="form-label">Keterangan Dari Paket</label>
            <input type="text" class="form-control" id="keterangan_paket" aria-describedby="keterangan_paket" name="keterangan_paket" value="{{ $paket->keterangan_paket }}" readonly>
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga dari paket</label>
            <input type="text" class="form-control" id="harga" aria-describedby="harga" name="harga" value="{{ $paket->harga }}" readonly>
          </div>
          <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control" id="nama_pelanggan" aria-describedby="nama_pelanggan" name="nama_pelanggan" required>
          </div>
          <div class="mb-3">
            <label for="no_pelanggan" class="form-label">No Hp Pembeli</label>
            <input type="text" class="form-control" id="no_pelanggan" aria-describedby="no_pelanggan" name="no_pelanggan" required>
          </div>
          <div class="mb-3">
            <label for="nama_barber" class="form-label">Pilih Barber</label>
            <select class="form-control" id="nama_barber" aria-describedby="nama_barber" name="nama_barber" required>
              <option value="Fawwaz">Fawwaz</option>
              <option value="Rafael">Rafael</option>
              <option value="Yudi">Yudi</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="jam_potong" class="form-label">Waktu Potong</label>
            <input type="text" class="form-control" id="jam_potong" aria-describedby="jam_potong" name="jam_potong" required>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Pesan Reservasi</button>
              {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          </div>
    </form>
    </div>
    </div>
</div>
</div>
  