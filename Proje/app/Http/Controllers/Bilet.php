<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biletler;

class Bilet extends Controller
{
    function biletForm(){
        return view('biletEkle');
    }

    function biletEkle(Request $request){
    
        $request->validate([
            'firma-adi' => 'required',
            'kalkis-yeri' => 'required',
            'varis-yeri' => 'required',
            'kalkis-saati' => 'required',
            'fiyat' => 'required',
        ]);
    
        try {
            Biletler::create([
                'firma_adi' => $request->input('firma-adi'),
                'kalkis_yeri' => $request->input('kalkis-yeri'),
                'varis_yeri' => $request->input('varis-yeri'),
                'kalkis_saati' => $request->input('kalkis-saati'),
                'fiyat' => $request->input('fiyat'),
            ]);

            dd($bilet);
            
            return redirect(route('biletformu'))->with('success', 'Kayıt İşlemi Başarılı');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Kayıt İşlemi Başarısız: ' . $e->getMessage());
        }
    }
}