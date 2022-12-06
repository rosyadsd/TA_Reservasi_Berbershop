<!-- Modal -->
<div class="modal fade" id="approve{{ $reservasi->id }}" tabindex="-1" aria-labelledby="beliProduk" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="beliProduk">Konfirmasi Persetujuan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/dashboard/reservasis/{{ $reservasi->id }}" method="POST">
            @method('PUT')
            @csrf
            <input type="number" name="isApprove" value=1 hidden>
            <div class="mb-3">
                <label for="persetujuan" class="form-label">Karyawan yang Menyetujui</label>
                <input type="text" class="form-control" id="persetujuan" name="persetujuan" value="{{ auth()->user()->nama_admin }}" readonly>
              </div>
            <div class="mb-3">
                <label for="nama_paket" class="form-label">Nama Paket Barbershop</label>
                <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="{{ $reservasi->nama_paket }}" readonly>
              </div>
              <div class="mb-3">
                <label for="keterangan_paket" class="form-label">Keterangan Paket</label>
                <input type="text" class="form-control" id="keterangan_paket" name="keterangan_paket" value="{{ $reservasi->keterangan_paket }}" readonly>
              </div>
              <div class="mb-3">
                <label for="harga" class="form-label">Harga Paket</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $reservasi->harga }}" readonly>
              </div>
              <div class="mb-3">
                <label for="nama_pelanggan" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="{{ $reservasi->nama_pelanggan }}" readonly>
              </div>
              <div class="mb-3">
                <label for="no_pelanggan" class="form-label">No Hp Pelanggan</label>
                <input type="text" class="form-control" id="no_pelanggan" name="no_pelanggan" value="{{ $reservasi->nohp_pelanggan }}" readonly>
              </div>
              <div class="mb-3">
                <label for="nama_barber" class="form-label">Nama Barberman</label>
                <input type="text" class="form-control" id="nama_barber" name="nama_barber" value="{{ $reservasi->nama_barber }}" readonly>
              </div>
              <div class="mb-3">
                <label for="jam_potong" class="form-label">Waktu Potong</label>
                <input type="text" class="form-control" id="jam_potong" name="jam_potongr" value="{{ $reservasi->jam_potong }}" readonly>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Konfirmasi</button>
                  {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button> --}}
              </div>
        </form>
        </div>
        </div>
    </div>
    </div>
      