<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\MasyarakatModel;
use App\Models\Pengaduan;
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

        // $cek = $request->validate([
        //     'nik' => 'required|unique:masyarakats|max:16',
        //     'nama' => 'required',
        //     'username' => 'required|min:6',
        //     'password' => 'required|min:4',
        //     'telp' => 'required|max:13'
        // ]);

        $V->create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'telp' => $request->telp,
        ]);

        return redirect('login')->with('pesan', 'selamat, registrasi berhasil');
    }
    public function pengaduan()
    {
        return view('Pengaduan');
    }
public function Lapor(Request $request)
{
    $N = new Pengaduan();
    $foto = $request->file('foto');
    $folder = 'upload_data';
    $foto->move($folder, $foto->getClientOriginalName());
    return "asup";
 
    // $cek = $request->validate([
    //     'id_pengaduan' => 'required|unique:pengaduans|max:16',
    //     'tgl_pengaduan' => 'required',
    //     'nik' => 'required|min:6',
    //     'isi_laporan' => 'required|min:4',
    //     'foto' => 'required|max:13'
    // ]);
    // $N->create([
    //     'id_pengaduan' => $request->id_pengaduan,
    //     'tgl_pengaduan' => $request->tgl_pengaduan,
    //     'nik' => $request->nik,
    //     'isi_laporan' => $request->isi_laporan,
    //     'foto' => $request->foto,
    // ]);

    // return back()->with('pesan', 'selamat, registrasi berhasil');
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
            return redirect('/');
        }
        return back();
    }
    public function logout()
    {
        session()->flush();
        return back();
    }
}
