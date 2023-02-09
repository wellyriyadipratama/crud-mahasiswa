<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        // mengambil data dari table mahasiswa
        $mahasiswa = DB::table('mahasiswa')->get();

        // mengirim data mahasiswa ke view index
        return view('index',['mahasiswa' => $mahasiswa]);

    }

    public function tambah()
    {
        //memanggil view tambah
        return view('tambah');
    }

    public function store(Request $request)
    {
        //insert data ke table mahasiswa
        DB::table('mahasiswa')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);
        //alihkan halaman ke halaman mahasiswa
        return redirect ('/mahasiswa'); 
    }

    public function edit($id)
    {
        //mengambil data mahasiswa  berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('id',$id)->get();
        //passing data mahasiswa yang didapat ke view edit.php
        return view('edit',['mahasiswa' => $mahasiswa]);
    }

    //update data mahasiswa
    public function update(Request $request)
    {
        //update data mahasiswa
        DB::table('mahasiswa')->where('id',$request->id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);
        
        return redirect('/mahasiswa');
    }

    //hapus data mahasiswa
    public function hapus($id)
    {
        //hapus data mahasiswa
        DB::table('mahasiswa')->where('id', $id)->delete();
        //redirect halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }
}
