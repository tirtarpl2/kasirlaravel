<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Barang;
use App\Models\Transaksi_detail;
class Transaksi_detailController extends Controller
{
    public function index($id){
        $transaksi_detail = DB::table('tbl_transaksi_detail')
        ->select('tbl_barang.barang_nama','tbl_transaksi_detail.*')
        ->join('tbl_barang','tbl_barang.id_barang','=','tbl_transaksi_detail.id_barang')
        ->where('id_transaksi',$id)
        ->get();

        //dd('$transaksi');
        return view ('transaksi_detail.index', compact('transaksi_detail'));
    }   
    public function ubah($id){
        $transaksi_detail = Transaksi_detail::find($id);
        $barang = Barang::all();
        return view ('transaksi_detail.ubah',['transaksi_detail'=>$transaksi_detail,'barang'=>$barang]); 
    }
    public function update($id,request $request){
        $transaksi_detail =Transaksi_detail::find($id);
        $transaksi_detail->update($request->except('_token','method'));
        return redirect ('transaksi_detail'); 
    }

    public function hapus($id){
        $hapus = Transaksi_detail::findOrfail($id);
        $hapus->delete();
        return redirect ('transaksi_detail'); 

    } 
}