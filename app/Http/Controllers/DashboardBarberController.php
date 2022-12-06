<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use Illuminate\Http\Request;

class DashboardBarberController extends Controller
{

    public function index()
    {
        return view('dashboard.barber.index', [
            'barbers' => Barber::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.barber.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barber' => ['required', 'max:255'],
            'nohp_barber' => ['required', 'max:255'],
            'umur' => ['required']
        ]);

        Barber::create($validatedData);

        return redirect('/dashboard/barbers');
    }

    public function edit(Barber $barber)
    {
        return view('dashboard.barber.edit', [
            'barber' => $barber
        ]);
    }

    public function update(Request $request, Barber $barber)
    {
        $validatedData = $request->validate([
            'nama_barber' => ['required','max:255'],
            'nohp_barber' => ['required','max:255'],
            'umur' => ['required']
        ]);

        Barber::where('id', $barber->id)->update($validatedData);
        return redirect('/dashboard/barbers');
    }

    public function destroy(Barber $barber)
    {
        Barber::find($barber->id)->delete();
        return redirect('/dashboard/barbers');
    }

    public function recycle(){
        return view('dashboard.barber.recycle', [
            'barbers' => Barber::onlyTrashed()->paginate(10)
        ]);
    }

    public function restore($barberID){
        Barber::onlyTrashed()->find($barberID)->restore();
        return redirect('/dashboard/barbers/recycle');
    }

    public function delete($barberID){
        Barber::onlyTrashed()->find($barberID)->forceDelete();
        return redirect('/dashboard/barbers/recycle');
    }
}
