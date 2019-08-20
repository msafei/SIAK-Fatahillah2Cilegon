<?php

namespace App\Http\Controllers;
use App\NominalSpp;
use App\JenisPembayaran;
use App\Kelas;
use Illuminate\Http\Request;

class NominalSppController extends Controller
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
        $nominalSpp = NominalSpp::all();
        return view ('nominal-spp.index',compact('nominalSpp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = kelas::all();
        $jenisPembayaran = JenisPembayaran::where('kode','=',"spp")->get();
        return view ('nominal-spp.create',compact('jenisPembayaran','kelas'));
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
        
        $nominalSpp = NominalSpp::create($request->all());
        return redirect()->route('nominal-spp.index')->with('success','Data telah dibuat');
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
        $jenisPembayaran = JenisPembayaran::all();
        $kelas = kelas::all();
        $nominalSpp = NominalSpp::findOrFail($id);
        return view('nominal-spp.edit',compact('nominalSpp','jenisPembayaran','kelas'));
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
        $nominalSpp = NominalSpp::find($id);
        $nominalSpp->update($request->all());
        return redirect('/nominal-spp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nominalSpp = NominalSpp::findOrFail($id);
        $nominalSpp->delete();
        return redirect('/nominal-spp');
    }
}
