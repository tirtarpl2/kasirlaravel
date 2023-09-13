<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class AdminController extends Controller
{

    public function lp()
    {
        return view('lp');
    }

    public function dashboard()
    {
        return view('dasboard');
    }

    public function index(){
        $admin = DB::table('tbl_admin')
        ->get();

        //dd('$admin');
        return view('admin.index',compact('admin'));
    }
    public function tambah(){

        return view('admin.tambah');
    }
    public function simpan(Request $request)
    {
            //dd($request);
        $simpan = Admin::create([

            'username'=>$request->username,
            'password'=>$request->password,
            'admin_level'=>$request->admin_level,
            'admin_nama'=>$request->admin_nama,
            'admin_status'=>$request->admin_status
        ]);
        echo $simpan->id_admin;
        return redirect('/');


    }
    public function ubah($id)
    {
        $admin = Admin::find($id);

        return view('admin.ubah',['admin'=>$admin]);
    }
    public function update($id,Request $request)
    {
        $admin = Admin::find($id);
        $admin->update($request->except('_token','method'));
            return redirect('/');

    }
    public function hapus($id)
    {
        $hapus = Admin::findOrfail($id);
        $hapus->delete();
        return redirect('');

    }

}


