<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = \App\Profile::all();

        return view('profile.view', ['allProfile' => $profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $fileName = $request->nama . '.'. $request->file('foto')->getClientOriginalExtension();
        $path_file = $request->file('foto')->storeAs('public/images',$fileName);

        $saveData = new Profile();
        $saveData->foto = $fileName;
        $saveData->path_file = $path_file;

        \App\Profile::create([
            'nama' => $request->get('nama'),
            'alamat' => $request->get('alamat'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'foto' => $fileName,
            'path_file' => $path_file,
            'cerita' => $request->get('cerita'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'fakultas' => $request->get('fakultas'),
          ]);

        // dd($validate, $request->file('foto'));

        return redirect('/')->with('status', 'New Profile Has been uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
