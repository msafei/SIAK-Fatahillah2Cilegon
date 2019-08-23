<?php

namespace App\Http\Controllers;
use App\JenisPembayaran;
use App\PembayaranSpp;
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
        $jenisPembayaran = JenisPembayaran::all();
        $kelas = Kelas::all();
        $nominalSpp = NominalSpp::all();
        $siswa = Siswa::all();
        $pembayaranSpp = PembayaranSpp::all();
        return view ('pembayaran-spp.index',compact('pembayaranSpp','siswa','kelas','nominalSpp','jenisPembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $spp = new PembayaranSpp;
        $spp->id = $request->id;
        $spp->siswa_id = $request->siswa_id;
        $spp->kelas_id = $request->kelas_id;
        $spp->bulan=implode(" ", $request->bulan);
        $spp->nominalSpp_id = $request->nominalSpp_id;
        $spp->nominal = $request->nominal;
        $spp->totalBulan = $request->totalBulan;
        $spp->potongan = $request->potongan;
        $spp->total = $request->total;
        $spp->save();

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
    public function edit($id)
    {
        $pembayaranSpp = PembayaranSpp::findOrFail($id);
        return view('pembayaran-spp.index',compact('pembayaranSpp'));
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
        $pembayaranSpp = PembayaranSpp::find($id);
        $pembayaranSpp->update($request->all());
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

    public function cariKelas($id)
    {
        $siswa = Siswa::findOrFail($id);
        return json_encode($siswa);
    }

    public function cariNominal($id)
    {
        $nominalSpp = NominalSpp::findOrFail($id);
        return json_encode($nominalSpp);
    }


}
