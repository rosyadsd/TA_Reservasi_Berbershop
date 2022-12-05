<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class DashboardInvoiceController extends Controller
{

    public function index()
    {
        return view('dashboard.invoice.index',[
            'invoices' => Invoice::where('isApprove', 0)->get()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merk_hp' => ['required','max:255'],
            'tipe_hp' => ['required','max:255'],
            'nama_pembeli' => ['required', 'max:255'],
            'nohp_pembeli' => ['required', 'max:255'],
            'harga' => ['required']
        ]);

        Invoice::create($validatedData);
        return redirect('/product');
    }

    public function update(Request $request, Invoice $invoice)
    {
        $validatedData = $request->validate([
            'persetujuan' => ['required'],
            'merk_hp' => ['required','max:255'],
            'tipe_hp' => ['required','max:255'],
            'nama_pembeli' => ['required', 'max:255'],
            'nohp_pembeli' => ['required', 'max:255'],
            'harga' => ['required'],
            'isApprove' => ['required']
        ]);

        Invoice::where('id', $invoice->id)->update($validatedData);
        return redirect('/dashboard/invoices');
    }

    public function destroy(Invoice $invoice)
    {
        Invoice::find($invoice->id)->delete();
        return redirect('/dashboard/invoices');
    }

    public function recycle(){
        return view('dashboard.invoice.recycle', [
            'invoices' => Invoice::onlyTrashed()->where('isApprove', 0)->get()
        ]);
    }

    public function restore($invoiceId){
        Invoice::onlyTrashed()->where('isApprove', 0)->find($invoiceId)->restore();
        return redirect('/dashboard/invoices/recycle');
    }

    public function delete($invoiceId){
        Invoice::onlyTrashed()->where('isApprove', 0)->find($invoiceId)->forceDelete();
        return redirect('/dashboard/invoices/recycle');
    }
}
