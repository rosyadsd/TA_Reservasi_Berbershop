<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use App\Models\Toko;
use App\Models\Invoice;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function index(){
        return view('frontpage.pages.index');
    }

    public function product(){
        // return view('frontpage.pages.product', [
        //     'handphones' => Handphone::paginate(8)
        // ]);
        if(request('merk_hp')){
            $merk_hp = Handphone::firstWhere('merk_hp', request('merk_hp'));
        }

        if(request('tipe_hp')){
            $tipe_hp = Handphone::firstWhere('merk_hp', request('merk_hp'));
        }
        return view("frontpage.pages.product", [
            "handphones" => Handphone::latest()->filter(request(['search','tipe_hp','merk_hp']))->paginate(8)->withQueryString()
        ]);
    }

    public function showProduct(Request $request){
        $handphones = Handphone::all();
        if($request->keyword != ''){
            $handphones = Handphone::where('tipe_hp','LIKE','%'.$request->keyword.'%')->get();
        }
        return response()->json([
            'handphones' => $handphones
        ]);
    }
    
    public function beliProduk(Request $request){
        $validatedData = $request->validate([
            'merk_hp' => ['required'],
            'tipe_hp' => ['required'],
            'nama_pembeli' => ['required'],
            'nohp_pembeli' => ['required'],
            'harga' => ['required']
        ]);

        Invoice::create($validatedData);
        return redirect('/');
    }

    public function about(){
        return view('frontpage.pages.about');
    }
}
