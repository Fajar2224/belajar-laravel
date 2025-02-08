<?php

namespace App\Http\Controllers;

use App\Models\Lokal;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SiswaController extends Controller
{
    //
    public function index(): View
    {
        $data_siswa = Siswa::all();
        return view('siswa.index', [
            'menu' => 'siswa',
            'title' => 'Data Siswa',
            'data_siswa' => $data_siswa
        ]);
    }

    public function create(): View
    {
        $kelas = Lokal::all();
        return view('siswa.create', [
            'menu' => 'siswa',
            'title' => 'Tambah Data Siswa',
            'kelas' => $kelas
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validasi = $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'lokal_id' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'nama.required' => 'Nama Siswa Harus Diisi',
            'nisn.required' => 'NISN Harus Diisi',
            'jk.required' => 'Jenis Kelamin Harus Diisi',
            'alamat.required' => 'Alamat Harus Diisi',
            'lokal_id.required' => 'Kelas Harus Diisi',
            'foto.image' => 'File Harus Berupa Gambar',
            'foto.mimes' => 'Format File Harus jpeg, png, jpg, gif, svg',
            'foto.max' => 'Ukuran File Maksimal 2MB'
        ]);

        $simpan_foto = $request->file('foto')->store('foto_siswa');
        $siswa = new Siswa;
        $siswa->nama = $validasi['nama'];
        $siswa->nisn = $validasi['nisn'];
        $siswa->jk = $validasi['jk'];
        $siswa->alamat = $validasi['alamat'];
        $siswa->lokal_id = $validasi['lokal_id'];
        $siswa->no_telp = $request->no_telp;
        $siswa->foto = $simpan_foto;
        $siswa->save();

        return redirect()->route('siswa.index');
    }
    public function show($a_id)
    {
        $siswa = Siswa::find($a_id);
        return view('siswa.show', [
            'menu' => 'siswa',
            'title' => 'Detail Data Siswa',
            'siswa' => $siswa
        ]);
    }
}
