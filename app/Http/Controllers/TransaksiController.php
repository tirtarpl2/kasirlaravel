<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use App\Models\Transaksi_detail;
use App\Models\Barang;
class TransaksiController extends Controller
{
    public function index(){
        $transaksi = DB::table('tbl_transaksi')
        ->select('tbl_admin.admin_nama','tbl_transaksi.*')
        ->join('tbl_admin','tbl_transaksi.id_admin', '=' ,'tbl_admin.id_admin')
        ->get();
        
        //dd('$transaksi');
        return view ('transaksi.index',compact('transaksi'));
    }
    public function cetak(){
        $cetak = DB::table('tbl_transaksi')
        ->get();
        return view('transaksi.cetak',compact('cetak'));
    }
    
    public function tambah(){
        $admin = DB::table('tbl_admin')
        ->get();
        $barang = DB::table('tbl_barang')
        ->get();

        return view ('transaksi.tambah',compact(['barang','admin'])); 
    }
    public function simpan(Request $request){
        //simpan ke transaksi
        $simpan = Transaksi::create([
       
          'id_admin'=>$request->id_admin,
          'transaksi_tanggal'=>$request->transaksi_tanggal,
          'transaksi_nonota'=>$request->transaksi_nonota,
          'transaksi_status'=>$request->transaksi_status
        ]);
        echo $simpan->id_transaksi;
        
         //simpan ke transaksi detail
         $simpan = Transaksi_detail::create([
       
            'id_transaksi'=>$simpan->id_transaksi,
            'id_barang'=>$request->id_barang,
            'transaksi_jenis'=>$request->transaksi_jenis,
            'transaksi_harga'=>$request->transaksi_harga,
            'transaksi_jumlah'=>$request->transaksi_jumlah,
            'transaksi_detail_status'=>$request->transaksi_detail_status
          ]);
          echo $simpan->id_transaksi_detail;
        return redirect ('transaksi'); 
    }
     
    public function ubah($id){
        $transaksi = Transaksi::find($id);

        return view ('transaksi.ubah',['transaksi'=>$transaksi]); 
    }
    public function update($id,request $request){
        $transaksi =Transaksi::find($id);
        $transaksi->update($request->except('_token','method'));
        return redirect ('transaksi'); 
    }

    public function hapus($id){
        $hapus = Transaksi::findOrfail($id);
        $hapus->delete();
        return redirect ('transaksi'); 

    }


}