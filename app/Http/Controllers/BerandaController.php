<?php

namespace App\Http\Controllers;
use App\Models\Paket_Member;
use App\Models\Form_Garansi;
use App\Models\Form_Member;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda(){
        return view('pages.beranda');
    }
    public function formgaransi(){

        return view('pages.formulirgaransi');
    }

    public function pesan_garansi(Request $request){
        
        Form_Garansi::create([
            'jumlah'=>$request->jumlah,
            'nama'=>$request->nama,
            'no_wa'=>$request->no_wa,
            'keluhan'=>$request->keluhan,
            'provinsi'=>$request->provinsi,
            'kota'=>$request->kota,
            'alamat'=>$request->alamat,
            'kodeunik'=>$request->kodeunik,
            'total_pembayaran'=>$request->total_pembayaran,
            'status_pemesanan'=>$request->status_pemesanan,

        ]);
        return redirect()->back()->with('success'); 
    }
    public function bayar_garansi(Request $request, $id){
        Form_Garansi::where('form_garansi_id', $id)->update([
           
            'status_pemesanan'=>$request->status_pemesanan,
                   
            'buti_pembayaran'=>$request->bukti_pembayaran

        ]);
    }
    public function formmember(){
        $paket = Paket_Member::get();
        return view('pages.formulirmember', compact('paket'));
    }
    public function pesan_member(Request $request){
        Form_Member::create([
            'paket_id'=>$request->paket_id,
            'nama'=>$request->nama,
            'no_wa'=>$request->no_wa,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'nama_bank'=>$request->nama_bank,
            'cabang_bank'=>$request->cabang_bank,
            'nomor_rekening'=>$request->nomor_rekening,
            'identitas'=>$request->identitas,
            'nomor_identitas'=>$request->nomor_identitas,
            'provinsi'=>$request->provinsi,
            'kota'=>$request->kota,
            'alamat'=>$request->alamat,
            'kodeunik'=>$request->kodeunik,
            'total_pembayaran'=>$request->total_pembayaran,
            'status_pemesanan'=>$request->status_pemesanan,

        ]);
        return redirect()->back()->with('success'); 
    }
    public function bayar_member(Request $request, $id){
        Form_Member::where('form_member_id', $id)->update([
           
            'status_pemesanan'=>$request->status_pemesanan,
                   
            'buti_pembayaran'=>$request->bukti_pembayaran

        ]);
    }
}
