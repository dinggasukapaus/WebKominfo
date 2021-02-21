<?php

namespace App\Http\Controllers;

use App\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masuk=SuratMasuk::all();
        return view('admin/suratmasuk', compact('masuk'));
    }
    public function cari(Request $request)
    {
        $cari = $request->input('cari');

        $masuk = DB::table('suratmasuk')->select()
            ->where('AlamatPengirim', 'LIKE', '%'.$cari.'%')
            ->orwhere('NomorSurat', 'LIKE', '%'.$cari.'%')
            ->orwhere('Perihal', 'LIKE', '%'.$cari.'%')
            ->get();

        return view('admin/suratmasuk', compact('masuk'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/masuk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // \App\SuratMasuk::create($request->all());
        $masuk=new SuratMasuk;
        $masuk->create($request->all());
        return redirect('/suratmasuk');
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
        $item = \App\SuratMasuk::find($id);
        return view('admin/editmasuk', compact('item'));
    }

    public function update(Request $request, $id)
    {
        //
        $item = \App\SuratMasuk::find($id);
        $item->update($request->all());
        return redirect('/suratmasuk');
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
        $item = \App\SuratMasuk::find($id);
        $item->delete($item);
        return redirect('suratmasuk');
    }
}
