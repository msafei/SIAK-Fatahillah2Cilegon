<?php

namespace App\Http\Controllers;

use App\NominalLain;
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
        return view ('nominal-lain.index',compact('nominalLain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nominalLain = NominalLain::all();
        return view ('nominal-lain.create',compact('nominalLain'));
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
  
        $nominalLain = NominalPembayaran::create($request->all());
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
        return view('nominal-lain.edit',compact('nominalLain'));
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
