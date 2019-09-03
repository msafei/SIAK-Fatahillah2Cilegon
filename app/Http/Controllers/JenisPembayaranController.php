<?php

namespace App\Http\Controllers;
use App\JenisPembayaran;

use Illuminate\Http\Request;

class JenisPembayaranController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jenisPembayaran = JenisPembayaran::all();
        return view ('jenis-pembayaran.index',compact('jenisPembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('jenis-pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
       
        ]);

        $noMax = JenisPembayaran::all('id')->max('id');
        $idMax = substr($noMax,1,6);
        $idlma = $idMax;
        $idlma++;
        $idbru = sprintf("%05s",$idlma);
        $idoto = "P".$idbru;

        $b = new JenisPembayaran;
        $b->id = $idoto;
        $b->nama = $request->nama;
        $b->save();
  
        return redirect()->route('jenis-pembayaran.index')->with('success','Data telah dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisPembayaran = JenisPembayaran::findOrFail($id);
        return view('jenis-pembayaran.edit',compact('jenisPembayaran'));
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
        $jenisPembayaran = JenisPembayaran::find($id);
        $jenisPembayaran->update($request->all());
        return redirect('/jenis-pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisPembayaran = JenisPembayaran::findOrFail($id);
        $jenisPembayaran->delete();
        return redirect('/jenis-pembayaran');
    }
}
