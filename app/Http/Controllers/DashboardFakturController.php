<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class DashboardFakturController extends Controller
{

    public function index()
    {
        return view('dashboard.faktur.index', [
            'fakturs' => Reservasi::where('isApprove', 1)->get()
        ]);
    }

    public function destroy(Reservasi $reservasi)
    {
        Reservasi::find($reservasi->id)->delete();
        return redirect('/dashboard/fakturs');
    }

    public function recycle(){
        return view('dashboard.faktur.recycle', [
            'fakturs' => Reservasi::onlyTrashed()->where('isApprove', 1)->get()
        ]);
    }

    public function restore($reservasiId){
        Reservasi::onlyTrashed()->where('isApprove', 1)->find($reservasiId)->restore();
        return redirect('/dashboard/fakturs/recycle');
    }

    public function delete($reservasiId){
        Reservasi::onlyTrashed()->where('isApprove', 1)->find($reservasiId)->forceDelete();
        return redirect('/dashboard/fakturs/recycle');
    }
}
