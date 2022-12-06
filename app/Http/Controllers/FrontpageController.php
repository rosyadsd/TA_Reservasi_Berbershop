<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Toko;
use App\Models\Reservasi;
use App\Models\Barber;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function index(){
        return view('frontpage.pages.index');
    }

    public function product(){
        // return view('frontpage.pages.product', [
        //     'pakets' => Paket::paginate(8)
        // ]);
        if(request('nama_paket')){
            $nama_paket = Paket::firstWhere('nama_paket', request('nama_paket'));
        }

        if(request('keterangan_paket')){
            $keterangan_paket = Paket::firstWhere('nama_paket', request('nama_paket'));
        }
        return view("frontpage.pages.product", [
            "pakets" => Paket::latest()->filter(request(['search','keterangan_paket','nama_paket']))->paginate(8)->withQueryString()
        ]);
    }

    public function showProduct(Request $request){
        $pakets = Paket::all();
        if($request->keyword != ''){
            $pakets = Paket::where('keterangan_paket','LIKE','%'.$request->keyword.'%')->get();
        }
        return response()->json([
            'pakets' => $paket
        ]);
    }
    
    public function beliProduk(Request $request){
        $validatedData = $request->validate([
            'nama_paket' => ['required'],
            'keterangan_paket' => ['required'],
            'nama_pelanggan' => ['required'],
            'no_pelanggan' => ['required'],
            'nama_barber' => ['required', 'max:255'],
            'jam_potong' => ['required', 'max:255'],
            'harga' => ['required']
        ]);

        Invoice::create($validatedData);
        return redirect('/');
    }

    public function about(){
        return view('frontpage.pages.about');
    }
}
