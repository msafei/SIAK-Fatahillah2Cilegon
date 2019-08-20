<?php

namespace App\Http\Controllers;
use App\NominalPembayaran;
use App\JenisPembayaran;
use Illuminate\Http\Request;

class NominalPembayaranController extends Controller
{
    /**
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
        $nominalPembayaran = NominalPembayaran::all();
        return view ('nominal-pembayaran.index',compact('nominalPembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisPembayaran = JenisPembayaran::where('kode','=',"non spp")->get();
        return view ('nominal-pembayaran.create',compact('jenisPembayaran'));
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
  
        $nominalPembayaran = NominalPembayaran::create($request->all());
        return redirect()->route('nominal-pembayaran.index')->with('success','Data telah dibuat');
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
        $jenisPembayaran = JenisPembayaran::where('kode','=',"non spp")->get();
        $nominalPembayaran = NominalPembayaran::findOrFail($id);
        return view('nominal-pembayaran.edit',compact('nominalPembayaran','jenisPembayaran'));
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
        $nominalPembayaran = NominalPembayaran::find($id);
        $nominalPembayaran->update($request->all());
        return redirect('/nominal-pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nominalPembayaran = NominalPembayaran::findOrFail($id);
        $nominalPembayaran->delete();
        return redirect('/nominal-pembayaran');
    }
}
