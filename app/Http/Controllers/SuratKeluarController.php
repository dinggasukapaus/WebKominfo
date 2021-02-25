<?php

namespace App\Http\Controllers;

use App\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratKeluarController extends Controller
{

    public function index()
    {
        // pagination
        $keluar=SuratKeluar::paginate(2);

        return view('admin/suratkeluar', compact('keluar'));
    }

    public function create()
    {
        //
        return view('admin/keluar');
    }

    public function store(Request $request)
    {
        //
        $SuratKeluar = new SuratKeluar();
        $SuratKeluar->AlamatPenerima=$request->AlamatPenerima;
        $SuratKeluar->Tanggal=$request->Tanggal;
        $SuratKeluar->NomorSurat=$request->NomorSurat;
        $SuratKeluar->Perihal=$request->Perihal;

        if($request->hasFile('image')){
            $request->file('image')->move('lte/dist/images/', $request->file('image')->getClientOriginalName());
            $SuratKeluar->Foto = $request->file('image')->getClientOriginalName();
        }
        $SuratKeluar->save();

        return redirect('/suratkeluar');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $kel = \App\SuratKeluar::find($id);
        return view('admin/editkeluar', compact('kel'));
    }

    public function update(Request $request, $id)
    {
        //
        $kel = \App\SuratKeluar::find($id);
        $kel->update($request->all());
        return redirect('/suratkeluar');
    }

    public function destroy($id)
    {
        //
        $kel = \App\SuratKeluar::find($id);
        $kel->delete($kel);
        return redirect('suratkeluar');
    }
    public function carikel(Request $request)
    {
        $carikel = $request->input('carikel');

        $keluar = DB::table('suratkeluar')->select()
        ->where('AlamatPenerima', 'LIKE', '%'.$carikel.'%')
        ->orwhere('NomorSurat', 'LIKE', '%'.$carikel.'%')
        ->orwhere('Perihal', 'LIKE', '%'.$carikel.'%')
        // ->get();
        ->paginate(2);
        // dd($keluar);
        return view('admin/suratkeluar', compact('keluar'));
    }
}
