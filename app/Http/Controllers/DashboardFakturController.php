<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class DashboardFakturController extends Controller
{

    public function index()
    {
        return view('dashboard.faktur.index', [
            'fakturs' => Invoice::where('isApprove', 1)->get()
        ]);
    }

    public function destroy(Invoice $invoice)
    {
        Invoice::find($invoice->id)->delete();
        return redirect('/dashboard/fakturs');
    }

    public function recycle(){
        return view('dashboard.faktur.recycle', [
            'fakturs' => Invoice::onlyTrashed()->where('isApprove', 1)->get()
        ]);
    }

    public function restore($invoiceId){
        Invoice::onlyTrashed()->where('isApprove', 1)->find($invoiceId)->restore();
        return redirect('/dashboard/fakturs/recycle');
    }

    public function delete($invoiceId){
        Invoice::onlyTrashed()->where('isApprove', 1)->find($invoiceId)->forceDelete();
        return redirect('/dashboard/fakturs/recycle');
    }
}
