<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UjiController extends Controller
{
    public function index()
    {
        $table = \App\Uji::all();
        return view('home',['table' => $table]);

    }

    public function tambah()
    {
        return view('uji_tambah');

    }

    public function store(Request $request)
    {
        $messages = [
            'required' => 'Wajib di isi!'
        ];

        $this->validate($request,[
            'nama' => 'required',
            'departement' => 'required',
            'date' => 'required'
        ],$messages);

        $table = \App\Uji::create([
            'nama' => $request->nama,
            'departement' => $request->departement,
            'date' => $request->date
        ]);

        return redirect('/table')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id){
        $table = \App\Uji::find($id);
        return view('uji_edit',['table' => $table]);
    }

    public function update($id, Request $request)
    {
        $messages = [
            'required' => 'Wajib di isi!'
        ];

        $this->validate($request,[
            'nama' => 'required',
            'departement' => 'required',
            'date' => 'required'
        ],$messages);

        $table = \App\Uji::find($id);
        $table->nama = $request->nama;
        $table->departement = $request->departement;
        $table->date = $request->date;
        $table->save();
        return redirect('/home')->with('sukses','Data Berhasil Diubah!');
    }

    public function delete($id)
    {
        $table = \App\Uji::find($id);
        $table->delete();
        return redirect('/home');
    }

}
