<?php

namespace App\Http\Controllers;
use App\TunggakanSpp;
use App\PembayaranSpp;
use App\Laporan;
use App\NominalSpp;
use App\Kelas;
use App\Siswa;
use Illuminate\Http\Request;

class PembayaranSppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $date = date('Y-m-d');
        $tunggakanSpp = TunggakanSpp::all()->where('tanggal',$date);
        $kelas = Kelas::all();
        $nominalSpp = NominalSpp::all();
        $siswa = Siswa::all();
        $pembayaranSpp = PembayaranSpp::all();
        return view ('pembayaran-spp.index',compact('pembayaranSpp','siswa','kelas','nominalSpp','jenisPembayaran','tunggakanSpp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $noMax = TunggakanSpp::all('id')->max('id');
        $date = date('dmy');
        $idMax = substr($noMax,9,12);
        $idlma = $idMax;
        $idlma++;
        $idbru = sprintf("%03s",$idlma);
        $idoto = "SPP".$date.$idbru;

        $a = new PembayaranSpp;
        $a->id = $request->id;
        $a->siswa_id = $request->siswa_id;
        $a->kelas_id = $request->kelas_id;
        $a->bulan=implode(", ", $request->bulan);
        $a->nominalSpp_id = $request->nominalSpp_id;
        $a->nominal = $request->nominal;
        $a->total = $request->total;
        $a->potongan = $request->potongan;
        $a->totalBulan = $request->totalBulan;
        $a->save();

        $b = new TunggakanSpp;
        $b->id = $idoto;
        $b->tanggal = $request->tanggal;
        $b->siswa_id = $request->siswa_id;
        $b->kelas_id = $request->kelas_id;
        $b->bulan=implode(", ", $request->bulan);
        $b->nominalSpp_id = $request->nominalSpp_id;
        $b->nominal = $request->nominal;
        $b->total = $request->total;
        $b->potongan = $request->potongan;
        $b->totalBulan = $request->totalBulan;
        $b->sisaBulan = $request->sisaBulan;
        $b->save();

        $c = new Laporan;
        $c->tanggal = $request->tanggal;
        $c->akun = "Kas Sekolah";
        $c->sumber = "SPP".$request->kelas_id;
        $c->ket = $request->siswa_id;
        $c->debit = $request->nominal;
        $c->save();

        return redirect('/pembayaran-spp')->with('success','Data telah dibuat');
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
  
        $pembayaranSpp = PembayaranSpp::create($request->all());
        return redirect('/pembayaran-spp')->with('success','Data telah dibuat');
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
    public function bayar($id)
    {
        
        $findLama = PembayaranSpp::findOrFail($id,'totalBulan');

        $finds = PembayaranSpp::findOrFail($id);
        $find = $finds->bulan;
        $bulan=[];
        $bulan = explode(", ", $find);

        $pembayaranSpp = PembayaranSpp::findOrFail($id);
        $kelas = Kelas::all();
        $nominalSpp = NominalSpp::all();
        $siswa = Siswa::all();
        return view ('pembayaran-spp.bayar',compact('pembayaranSpp','siswa','kelas','nominalSpp','bulan','findLama'));
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
        $dataPotong = PembayaranSpp::findOrFail($id);
        $potonganLama = $dataPotong->potongan;

        $dataTotal = PembayaranSpp::findOrFail($id);
        $totalLama = $dataTotal->total;

        $dataPotong = PembayaranSpp::findOrFail($id);
        $potonganLama = $dataPotong->potongan;

        $spp = PembayaranSpp::findOrFail($id);


        $finds = PembayaranSpp::findOrFail($id);
        $find = $finds->bulan;
        $bulan=[];
        $bulan = explode(", ", $find);

        $bulanLama = implode(", ", $bulan);
        $bulanBaru = implode(", ", $request->bulan);
        $spp->bulan= $bulanLama.', '.$bulanBaru;
        $spp->nominalSpp_id = $request->nominalSpp_id;
        $spp->nominal = $request->nominal;
        $spp->potongan = $request->potongan + $potonganLama;
        $spp->total = $request->total + $totalLama;
        $spp->totalBulan = $request->sudahBayar + $request->totalBulan;
        $spp->save();

        $noMax = TunggakanSpp::all('id')->max('id');
        $date = date('dmy');
        $idMax = substr($noMax,9,12);
        $idlma = $idMax;
        $idlma++;
        $idbru = sprintf("%03s",$idlma);
        $idoto = "SPP".$date.$idbru;
        
        $b = new TunggakanSpp;
        $b->id = $idoto;
        $b->tanggal = $request->tanggal;
        $b->siswa_id = $request->siswa_id;
        $b->kelas_id = $request->kelas_id;
        $b->bulan=implode(", ", $request->bulan);
        $b->nominalSpp_id = $request->nominalSpp_id;
        $b->nominal = $request->nominal;
        $b->total = $request->total;
        $b->totalBulan = $request->totalBulan;
        $b->sisaBulan = 12 - ($request->totalBulan + $request->sudahBayar);
        $b->potongan = $request->potongan;
        $b->save();

        $c = new Laporan;
        $c->tanggal = $request->tanggal;
        $c->akun = "Kas Sekolah";
        $c->sumber = "SPP".$request->kelas_id;
        $c->ket = $request->siswa_id;
        $c->debit = $request->nominal;
        $c->save();
        

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
        $pembayaranSpp = PembayaranSpp::findOrFail($id);
        $pembayaranSpp->delete();
        return redirect('/pembayaran-spp');
    }

    public function print($id)
    {
        $tunggakanSpp = TunggakanSpp::findOrFail($id);
        return view ('print.spp',compact('tunggakanSpp'));
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


    public function cariNominal($id)
    {
        $nominalSpp = NominalSpp::findOrFail($id);
        return json_encode($nominalSpp);
    }


}
