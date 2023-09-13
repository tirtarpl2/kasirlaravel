<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Jenis;

class JenisController extends Controller
{
    public function index(){
        $jenis = DB::table('tbl_jenis')
        ->get();

        //dd('$jenis');
        return view('jenis.index',['jenis'=>$jenis]);
    }
    public function tambah(){
        
        return view('jenis.tambah');
    }
    public function simpan(Request $request)
    {
            //dd($request);
        $simpan = Jenis::create([
            
            'jenis_nama'=>$request->jenis_nama,
            'jenis_status'=>$request->jenis_status
           
        ]);

        echo $simpan->id_jenis;
        return redirect('/jenis');
    

    }
    public function ubah($id)
    {
        $jenis = Jenis::find($id);
        
        return view('jenis.ubah',['jenis'=>$jenis]);
    }
    public function update($id,Request $request)
    {
        $jenis = Jenis::find($id);
        $jenis->update($request->except('_token','method'));
            return redirect('/jenis');

    }
    public function hapus($id)
    {
        $hapus = Jenis::findOrfail($id);
        $hapus->delete();
        return redirect('/jenis');

    }

}


