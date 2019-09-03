<?php

namespace App\Http\Controllers;
use App\TunggakanSpp;
use App\PembayaranSpp;
use App\TunggakanLain;
use App\PembayaranLain;
use App\NominalLain;
use App\NominalSpp;
use App\Kelas;
use App\Siswa;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function spp()
    {
        $tunggakanSpp = TunggakanSpp::all();
        $kelas = Kelas::all();
        $nominalSpp = NominalSpp::all();
        $siswa = Siswa::all();
        $pembayaranSpp = PembayaranSpp::all();
        return view ('history.spp',compact('pembayaranSpp','siswa','kelas','nominalSpp','jenisPembayaran','tunggakanSpp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lain()
    {
        $pembayaranLain = PembayaranLain::all();
        $kelas = Kelas::all();
        $nominalLain = NominalLain::all();
        $siswa = Siswa::all();
        $tunggakanLain = TunggakanLain::all();
        return view ('history.lain',compact('pembayaranLain','siswa','kelas','nominalLain','tunggakanLain'));
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
