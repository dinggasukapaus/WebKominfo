<?php

namespace App\Http\Controllers;

use App\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratKeluarController extends Controller
{
    
    public function index()
    {
        $keluar=SuratKeluar::all();
        return view('admin/suratkeluar', compact('keluar'));
    }

    public function carikel(Request $request)
    {
        $carikel = $request->input('carikel');

        $keluar = DB::table('suratkeluar')->select()
            ->where('AlamatPenerima', 'LIKE', '%'.$carikel.'%')
            ->orwhere('NomorSurat', 'LIKE', '%'.$carikel.'%')
            ->orwhere('Perihal', 'LIKE', '%'.$carikel.'%')
            ->get();

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
        $keluar=new SuratKeluar;
        $keluar->create($request->all());
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
}
