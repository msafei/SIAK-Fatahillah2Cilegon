<?php

namespace App\Http\Controllers;
use App\TunggakanLain;
use App\PembayaranLain;
use App\Laporan;
use App\NominalLain;
use App\Kelas;
use App\Siswa;
use Illuminate\Http\Request;

class PembayaranLainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $date = date('Y-m-d');
        $pembayaranLain = PembayaranLain::all()->where('tanggal',$date);
        $kelas = Kelas::all();
        $nominalLain = NominalLain::all();
        $siswa = Siswa::all();
        $tunggakanLain = TunggakanLain::all();
        return view ('pembayaran-lain.index',compact('pembayaranLain','siswa','kelas','nominalLain','tunggakanLain'));
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

        $noMax = PembayaranLain::all('id')->max('id');
        $date = date('dmY');
        $idMax = substr($noMax,8,11);
        $idlma = $idMax;
        $idlma++;
        $idbru = sprintf("%03s",$idlma);
        $idoto = $date.$idbru;

        $a = new TunggakanLain;
        $a->siswa_id = $request->siswa_id;
        $a->kelas_id = $request->kelas_id;
        $a->nominal_lain_id = $request->jenis_pembayaran_id;
        $a->nominal = $request->nominal;
        $a->bayar = $request->bayar;
        $a->potongan = $request->potongan;
        $a->total = $request->bayar;
        $a->save();

        $b = new PembayaranLain;
        $b->id = $idoto;
        $b->tanggal = date('Y-m-d');
        $b->siswa_id = $request->siswa_id;
        $b->kelas_id = $request->kelas_id;
        $b->nominal_lain_id = $request->jenis_pembayaran_id;
        $b->nominal = $request->nominal;
        $b->bayar = $request->bayar;
        $b->potongan = $request->potongan;
        $b->total = $request->bayar;
        $b->save();

        return redirect('/pembayaran-lain')->with('success','Data telah dibuat');
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
    public function bayar($id)
    {
        $tunggakanLain = TunggakanLain::findOrFail($id);
        $kelas = Kelas::all();
        $nominalLain = NominalLain::all();
        $siswa = Siswa::all();
        return view ('pembayaran-lain.bayar',compact('tunggakanLain','siswa','kelas','nominalLain'));
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
        $lain = TunggakanLain::findOrFail($id);
        $noMax = PembayaranLain::all('id')->max('id');
        $date = date('dmY');
        $idMax = substr($noMax,8,11);
        $idlma = $idMax;
        $idlma++;
        $idbru = sprintf("%03s",$idlma);
        $idoto = $date.$idbru;

        $a = $request->sudahBayar;
        $b = $request->bayar;
        $c = $request->potongan;
        $d = $a + $b;

        $lain->siswa_id = $request->siswa_id;
        $lain->kelas_id = $request->kelas_id;
        $lain->nominal_lain_id = $request->jenis_pembayaran_id;
        $lain->nominal = $request->nominal;
        $lain->potongan = $request->potongan;
        $lain->bayar = $d;
        $lain->total = $d - $c;
        $lain->save();

        $BayarLain = new PembayaranLain;
        $BayarLain->id = $idoto;
        $BayarLain->tanggal = date('Y-m-d');
        $BayarLain->siswa_id = $request->siswa_id;
        $BayarLain->kelas_id = $request->kelas_id;
        $BayarLain->nominal_lain_id = $request->jenis_pembayaran_id;
        $BayarLain->nominal = $request->nominal;
        $BayarLain->bayar = $request->bayar;
        $BayarLain->potongan = $request->potongan;
        $BayarLain->total = $d;
        $BayarLain->save();

        return redirect('/pembayaran-spp');
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

    public function print($id)
    {
        $pembayaranLain = PembayaranLain::findOrFail($id);
        return view ('print.pembayaran',compact('pembayaranLain'));
   }

    public function cariSiswaKelas($id)
    {
        $siswa = Siswa::findOrFail($id);
        return json_encode($siswa);
    }

    public function cariKelas($id)
    {
        $kelas = Kelas::findOrFail($id);
        return json_encode($kelas);
    }


    public function cariPembayaran($id)
    {
        $nominalLain = NominalLain::all()->where("kelas_id",$id)->pluck("id","jenis_pembayaran_id");
        return json_encode($nominalLain);
    }

    public function cariNominal($id)
    {
        $nominalLain = NominalLain::findOrFail($id);
        return json_encode($nominalLain);
    }
}
