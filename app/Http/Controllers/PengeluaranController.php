<?php

namespace App\Http\Controllers;
use App\Pengeluaran;
use App\Laporan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluaran = Pengeluaran::all();
        return view ('pengeluaran.index',compact('pengeluaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
      
            ]);

        $a = new Pengeluaran;
        $a->tanggal = $request->tanggal;
        $a->admin_id = Auth::user()->id;
        $a->nama = $request->nama;
        $a->keterangan = $request->keterangan;
        $a->nominalPengeluaran = $request->nominal;
        $a->save();

        return redirect('/pengeluaran')->with('success','Data telah dibuat');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function diterima(Request $request, $id)
    {
        $a = Pengeluaran::findOrFail($id);
        $a->kepsek_id = Auth::user()->id;
        $a->status = "1";
        $a->save();

        $b = new Laporan;
        $b->tanggal = date('Y-m-d');
        $b->akun = "Kas Sekolah";
        $b->sumber = $a->nama;
        $b->ket = $a->keterangan;
        $b->kredit = $a->nominalPengeluaran;
        $b->save();

        return redirect('/pengeluaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ditolak($id)
    {
        $a = Pengeluaran::findOrFail($id);
        $a->kepsek_id = Auth::user()->id;
        $a->status = "2";
        $a->save();
        return redirect('/pengeluaran');
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
