<!-- Modal -->
<div class="modal fade" id="detail{{ $faktur->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detail Rincian</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-3">
                    Persetujuan <br />
                    Pilihan Paket <br /><br />
                    Pemesan<br />
                    No Hp Pemesan <br />
                    Barber <br />
                    Jam Potong <br />
                    Harga <br />
                    Tanggal <br />
                </div>
                <div class="col-sm-8">
                    : {{ $faktur->persetujuan }} <br />
                    : {{ $faktur->nama_paket." ".$faktur->keterangan_paket }} <br />
                    : {{ $faktur->nama_pelanggan }} <br />
                    : {{ $faktur->no_pelanggan }} <br />
                    : {{ $faktur->nama_barber }} <br />
                    : {{ $faktur->jam_potong }} <br />
                    : {{ $faktur->harga }}<br />
                    : {{ $faktur->created_at->toDateString() }} <br />
                </div>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
        </div>
      </div>
    </div>
  </div>