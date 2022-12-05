<!-- Modal -->
<div class="modal fade" id="approve{{ $invoice->id }}" tabindex="-1" aria-labelledby="beliProduk" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="beliProduk">Approval Confirmation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/dashboard/invoices/{{ $invoice->id }}" method="POST">
            @method('PUT')
            @csrf
            <input type="number" name="isApprove" value=1 hidden>
            <div class="mb-3">
                <label for="persetujuan" class="form-label">Karyawan yang Menyetujui</label>
                <input type="text" class="form-control" id="persetujuan" name="persetujuan" value="{{ auth()->user()->nama_karyawan }}" readonly>
              </div>
            <div class="mb-3">
                <label for="merk_hp" class="form-label">Merk Handphone</label>
                <input type="text" class="form-control" id="merk_hp" name="merk_hp" value="{{ $invoice->merk_hp }}" readonly>
              </div>
              <div class="mb-3">
                <label for="tipe_hp" class="form-label">Tipe Handphone</label>
                <input type="text" class="form-control" id="tipe_hp" name="tipe_hp" value="{{ $invoice->tipe_hp }}" readonly>
              </div>
              <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $invoice->harga }}" readonly>
              </div>
              <div class="mb-3">
                <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" value="{{ $invoice->nama_pembeli }}" readonly>
              </div>
              <div class="mb-3">
                <label for="nohp_pembeli" class="form-label">No Hp Pembeli</label>
                <input type="text" class="form-control" id="nohp_pembeli" name="nohp_pembeli" value="{{ $invoice->nohp_pembeli }}" readonly>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Confirm</button>
                  {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
              </div>
        </form>
        </div>
        </div>
    </div>
    </div>
      