<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\MasyarakatModel;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function login()
    {
        return view('Masyarakat.Login');
    }
    public function registrasi()
    {
        return view('Masyarakat.registrasi');
    }
    public function simpan(Request $request)
    {
        $V = new Masyarakat();

        $cek = $request->validate([
            'nik' => 'required|unique:Masyarakat|max:16',
            'nama' => 'required',
            'username' => 'required|min:6',
            'password' => 'required|min:4',
            'telp' => 'required|max:13'
        ]);

        $V->create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'telp' => $request->telp,
        ]);

        return back()->with('pesan', 'selamat, registrasi berhasil');
    }
    public function ceklogin(Request $request)
    {
        $p = new Masyarakat();
        $p = $p->where('username', $request->input('username'))->where('password', $request->input('password'));

        if ($p->exists()) {
            session([
                'username' => $request->input('username'),
                'password' => $request->input('password')
            ]);
            return redirect('/masyarakat');
        }
        return back();
    }
    public function logout()
    {
        session()->flush();
        return back();
    }
}
