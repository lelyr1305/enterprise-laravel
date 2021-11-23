<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        $mahasiswa = \App\Mahasiswa::all();
        return view('mahasiswa.view', ['allMahasiswa' => $mahasiswa]);
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        \App\Mahasiswa::create([
            'nama' => $request->get('nama'),
            'alamat' => $request->get('alamat'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
          ]);
  
          return redirect('/mahasiswa');
    }
}
