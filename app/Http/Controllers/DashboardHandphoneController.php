<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use Illuminate\Http\Request;

class DashboardHandphoneController extends Controller
{

    public function index()
    {
        return view('dashboard.handphone.index', [
            'handphones' => Handphone::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.handphone.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merk_hp' => ['required', 'max:255'],
            'tipe_hp' => ['required', 'max:255'],
            'rating' => ['required'],
            'harga' => ['required']
        ]);

        Handphone::create($validatedData);

        return redirect('/dashboard/handphones');
    }

    public function edit(Handphone $handphone)
    {
        return view('dashboard.handphone.edit', [
            'handphone' => $handphone
        ]);
    }

    public function update(Request $request, Handphone $handphone)
    {
        $validatedData = $request->validate([
            'merk_hp' => ['required','max:255'],
            'tipe_hp' => ['required','max:255'],
            'rating' => ['required'],
            'harga' => ['required']
        ]);

        Handphone::where('id', $handphone->id)->update($validatedData);
        return redirect('/dashboard/handphones');
    }

    public function destroy(Handphone $handphone)
    {
        Handphone::find($handphone->id)->delete();
        return redirect('/dashboard/handphones');
    }

    public function recycle(){
        return view('dashboard.handphone.recycle', [
            'handphones' => Handphone::onlyTrashed()->paginate(10)
        ]);
    }

    public function restore($handphoneID){
        Handphone::onlyTrashed()->find($handphoneID)->restore();
        return redirect('/dashboard/handphones/recycle');
    }

    public function delete($handphoneID){
        Handphone::onlyTrashed()->find($handphoneID)->forceDelete();
        return redirect('/dashboard/handphones/recycle');
    }
}
