<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::all();
        return view('read', compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function insert(Request $request){
        Mahasiswa::create($request->all());
        return redirect()->route('read')->with('success','Data Berhasil Ditambahkan!');
    }

    public function edit($nim){
        $data = Mahasiswa::find($nim); 
        return view('edit', compact('data'));
    }

    public function update(Request $request, $nim) {
        $data = Mahasiswa::find($nim);
        $data->update($request->all());
        return redirect()->route('read')->with('success','Data Berhasil Diperbarui!');
    }

    public function delete($nim){
        $data = Mahasiswa::find($nim);
        $data->delete();
        return redirect()->route('read')->with('success','Data Berhasil Dihapus!');
    }
}
