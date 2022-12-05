<!-- Modal -->
<div class="modal fade" id="detail{{ $invoice->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detail Invoice</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-3">
                    Handphone<br />
                    Nama <br />
                    No Hp <br />
                    Harga <br />
                    Tanggal <br />
                </div>
                <div class="col-sm-8">
                    : {{ $invoice->merk_hp." ".$invoice->tipe_hp }} <br />
                    : {{ $invoice->nama_pembeli }} <br />
                    : {{ $invoice->nohp_pembeli }} <br />
                    : {{ $invoice->harga }}<br />
                    : {{ $invoice->created_at->toDateString() }} <br />
                </div>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>