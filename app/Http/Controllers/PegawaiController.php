<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index(){
        $data = Pegawai::paginate(5);
        return view('home', compact('data'));
    }

    public function create(){
        return view('tambahpegawai');
        
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'notelp' => 'required'
        ]);

        pegawai::create($request->all());
        return redirect()->route('index');

    }

    public function tampilan($id){
        $data = pegawai::find($id);
        return view('editdatapegawai', compact('data'));
    }

    public function update(Request $request, $id){
        $data = pegawai::find($id);
        $data->update($request->all());
        return redirect()->route('index');
    }

    public function destroy($id){
        $data = pegawai::find($id);
        $data->delete();
        return redirect()->route('index');
    }
}
