<?php

namespace App\Http\Controllers;

use App\NominalLain;
use App\Kelas;
use App\JenisPembayaran;
use Illuminate\Http\Request;

class NominalLainController extends Controller
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
        $nominalLain = NominalLain::all();
        $jenisPembayaran = JenisPembayaran::all();
        $kelas = Kelas::all();
        return view ('nominal-lain.index',compact('nominalLain','jenisPembayaran','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        $jenisPembayaran = JenisPembayaran::all();
        $nominalLain = NominalLain::all();
        return view ('nominal-lain.create',compact('nominalLain','jenisPembayaran','kelas'));
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
        $noMax = NominalLain::all('id')->max('id');
        $idMax = substr($noMax,1,4);
        $idlma = $idMax;
        $idlma++;
        $idbru = sprintf("%03s",$idlma);
        $idoto = "P".$idbru;

        $b = new NominalLain;
        $b->id = $idoto;
        $b->jenis_pembayaran_id = $request->jenis_pembayaran_id;
        $b->kelas_id = $request->kelas_id;
        $b->nominal = $request->nominal;
        $b->save();
        return redirect()->route('nominal-lain.index')->with('success','Data telah dibuat');
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
        $nominalLain = NominalLain::findOrFail($id);
        $kelas = Kelas::all();
        $jenisPembayaran = JenisPembayaran::all();
        return view('nominal-lain.edit',compact('nominalLain','jenisPembayaran','kelas'));
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
        $nominalLain = NominalLain::find($id);
        $nominalLain->update($request->all());
        return redirect('/nominal-lain');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nominalLain = NominalLain::findOrFail($id);
        $nominalLain->delete();
        return redirect('/nominal-lain');
    }
}
