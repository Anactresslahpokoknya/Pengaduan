<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('Administrator.index');
    }
    public function login()
    {
        return view('Administrator.Login');
    }

    public function registrasi1()
    {
        return view('Administrator.registrasi');
    }
    public function ceklogin(Request $request)
    {
        $p = new Petugas();
        $p = $p->where('username', $request->input('username'))->where('password', $request->input('password'));

        if ($p->exists()) {
            session([
                'username' => $p->first(),
                'password' => $request->input('password')
            ]);
            return redirect('/admin');
        }
        return back();
    }

    public function simpan1(Request $request)
    {
        $V = new Petugas();

        // $cek = $request->validate([
        //     'nik' => 'required|unique:masyarakats|max:16',
        //     'nama' => 'required',
        //     'username' => 'required|min:6',
        //     'password' => 'required|min:4',
        //     'telp' => 'required|max:13'
        // ]);

        $V->create([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'password' => $request->password,
            'telp' => $request->telp,
            'level' => $request->level
        ]);

        return redirect('/login1');
    }
    public function logout()
    {
        session()->flush();
        return back();
    }
    public function cekValidasi(Request $request,$id)
    {
        $m = new Pengaduan();
        $m->find($id)->update(['status'=>'proses']);
        return back()->with('pesan', 'Selamat, validasi berhasil');
    }

    public function validasi()
    {
        $m = new Pengaduan();
        return view('Administrator.Validasi',['data'=>$m->all()]);
    }
}


