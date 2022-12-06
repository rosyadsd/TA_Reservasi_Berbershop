<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class DashboardPaketController extends Controller
{

    public function index()
    {
        return view('dashboard.paket.index', [
            'pakets' => Paket::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.paket.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_paket' => ['required', 'max:255'],
            'keterangan_paket' => ['required', 'max:255'],
            'harga' => ['required']
        ]);

        Paket::create($validatedData);

        return redirect('/dashboard/pakets');
    }

    public function edit(Paket $paket)
    {
        return view('dashboard.paket.edit', [
            'paket' => $paket
        ]);
    }

    public function update(Request $request, Paket $paket)
    {
        $validatedData = $request->validate([
            'nama_paket' => ['required','max:255'],
            'keterangan_paket' => ['required','max:255'],
            'harga' => ['required']
        ]);

        Paket::where('id', $paket->id)->update($validatedData);
        return redirect('/dashboard/pakets');
    }

    public function destroy(Paket $paket)
    {
        Paket::find($paket->id)->delete();
        return redirect('/dashboard/pakets');
    }

    public function recycle(){
        return view('dashboard.paket.recycle', [
            'pakets' => Paket::onlyTrashed()->paginate(10)
        ]);
    }

    public function restore($paketID){
        Paket::onlyTrashed()->find($paketID)->restore();
        return redirect('/dashboard/pakets/recycle');
    }

    public function delete($paketID){
        Paket::onlyTrashed()->find($paketID)->forceDelete();
        return redirect('/dashboard/pakets/recycle');
    }
}
