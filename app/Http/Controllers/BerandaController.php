<?php

namespace App\Http\Controllers;
use App\Models\Paket_Member;
use App\Models\Form_Garansi;
use App\Models\Form_Member;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda(){
        $session_id = session()->getId();
        return view('pages.beranda', ['session_id'=>$session_id]);
    }
    public function formgaransi(){
        $sesi = Form_Garansi::select('session_id')->where('session_id', session()->getId())->first();
        if(is_null($sesi)){
            Form_Garansi::create([
                'session_id'=> session()->getId()
            ]);
        }
        return view('pages.formulirgaransi');
    }

    public function pesan_garansi(Request $request){
        
        Form_Garansi::where('session_id, session()->getId() ')->frist()->update([
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
    public function delSession(){
        session()->flush();
    }
    public function ajaxRequest(Request $request){  
        $sesi = Form_Garansi::where('session_id', session()->getId())->first();
         Form_Garansi::where('session_id', $sesi->session_id)->update([
            'nama'=>$request->nama,
            'no_wa'=>$request->no_wa,
            'keluhan'=>$request->keluhan,
            'kota'=>$request->kota,
            'provinsi'=>$request->provinsi,
            'alamat'=>$request->alamat,
            'jumlah'=>$request->jumlah
        // $check = $request->keluhan;
         ]);

        $output = '
        <div class="row mt-5">
                    <h4 class="fw-bold f-poppins ">Transfer Pembayaran</h4>
                </div>
                <div class="row">
                    <ul>
                        <li>
                            <img src="assets/bri.svg" alt="">
                        </li>
                        <li class="mt-2 mb-2">
                        <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Sahroni</label>
                        </li>
                        <li>
                        <h6 class="fw-bold f-poppins mt--1  text-dark">149501005407500</h6>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="assets/bri.svg" alt="">
                        </li>
                        <li class="mt-2 mb-2">
                        <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Sahroni</label>
                        </li>
                        <li>
                        <h6 class="fw-bold f-poppins mt--1  text-dark">149501005407500</h6>
                        </li>
                    </ul>
                </div>
                   <div class="row ">
                    <h4 class="fw-bold f-poppins ">Periode Pembayaran</h4>
                     <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Waktu yang Tersisa</label>
                   
                     <h4 class="fw-bold f-poppins ">07:00</h4> 
                     
                </div>
                <div class="row ">
                    <h4 class="fw-bold f-poppins ">Transaksi</h4>
                    
            
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label f-poppins text-secondary">Upload Bukti Pembayaran</label>
                        <input name="bukti_pembayaran" class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                     <input type="hidden" value="telah membayar" name="status_pemesanan">
                     <button type="submit" class="btn text-center  f-poppins rounded-pill btn-danger">
                    
                   Upload & Konfirmasi
                    </button>
                </div>
        ';
        $data = array(
            'data'=>$output,
            // 'check'=>$check
        );
        return response()->json($data, 200);
    }
    public function bayar_garansi(Request $request ){
        $sesion = Form_Garansi::where('session_id', session()->getId())->first();
        Form_Garansi::where('session_id', $sesion->session_id)->update([
           
            'status_pemesanan'=>$request->status_pemesanan,
                   
            'bukti_pembayaran'=>$request->bukti_pembayaran

        ]);
        return redirect()->route('Beranda')->with('success'); 
    }
    public function formmember(){
        $paket = Paket_Member::get();
        return view('pages.formulirmember', compact('paket'));
    }
    public function pesan_member(Request $request){
        $sesion_m = Form_Member::where('session_id', session()->getId())->first();
        Form_Member::where('session_id', $sesi->session_id)->update([
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
        ]);
 
        $output = '
        <div class="row mt-5">
        <h4 class="fw-bold f-poppins ">Transfer Pembayaran</h4>
    </div>
    <div class="row">
        <ul>
            <li>
                <img src="assets/bri.svg" alt="">
            </li>
            <li class="mt-2 mb-2">
            <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Sahroni</label>
            </li>
            <li>
            <h6 class="fw-bold f-poppins mt--1  text-dark">149501005407500</h6>
            </li>
        </ul>
        <ul>
            <li>
                <img src="assets/bri.svg" alt="">
            </li>
            <li class="mt-2 mb-2">
            <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Sahroni</label>
            </li>
            <li>
            <h6 class="fw-bold f-poppins mt--1  text-dark">149501005407500</h6>
            </li>
        </ul>
    </div>
       <div class="row ">
        <h4 class="fw-bold f-poppins ">Periode Pembayaran</h4>
         <label for="exampleFormControlInput1" class="form-label f-poppins text-secondary">Waktu yang Tersisa</label>
       <!-- timestamp -->
         <h4 class="fw-bold f-poppins ">07:00</h4> 
         <!-- akhir timestamp -->
    </div>
   
    <div class="row ">
        <h4 class="fw-bold f-poppins ">Transaksi</h4>
            @csrf
       <!-- form upload -->
        <div class="mb-3">
            <label for="formFileMultiple"  class="form-label f-poppins text-secondary">Upload Bukti Pembayaran</label>
            <input class="form-control" name="bukti_pembayaran"  type="file" id="formFileMultiple" multiple>
        </div>
        <input type="hidden" value="Telah Membayar" name="status_pemesanan">
         <!-- akhir form upload -->
         <button type="submit" class="btn text-center  f-poppins rounded-pill btn-danger">
        
       Upload & Konfirmasi
    </button>
</div>
        ';
        $data = array(
            'data'=>$output,
            // 'check'=>$check
        );
        return response()->json($data, 200);
    }
    public function bayar_member(Request $request, $id){
        Form_Member::where('form_member_id', $id)->update([
           
            'status_pemesanan'=>$request->status_pemesanan,
                   
            'bukti_pembayaran'=>$request->bukti_pembayaran

        ]);
        return redirect()->back()->with('success'); 
    }
}
