<!-- Modal -->
<div class="modal fade" id="detail{{ $reservasi->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detail Reservasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-3">
                    Paket<br />
                    Pemesan <br />
                    No Hp<br />
                    Barberman<br />
                    Jam<br />
                    Harga <br />
                    Tanggal <br />
                </div>
                <div class="col-sm-8">
                    : {{ $reservasi->nama_paket }} <br />
                    : {{ $reservasi->nama_pelanggan }} <br />
                    : {{ $reservasi->no_pelanggan }} <br />
                    : {{ $reservasi->nama_barber }} <br />
                    : {{ $reservasi->jam_potong }} <br />
                    : {{ $reservasi->harga }}<br />
                    : {{ $reservasi->created_at->toDateString() }} <br />
                </div>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>