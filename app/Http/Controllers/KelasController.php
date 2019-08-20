<?php

namespace App\Http\Controllers;
use App\Kelas;
use App\Jurusan;
use Illuminate\Http\Request;

class KelasController extends Controller
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
       $kelas = Kelas::all();
       return view ('kelas.index',compact('kelas'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $jurusan = Jurusan::all();
       return view ('kelas.create',compact('jurusan'));
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
       $kelas = Kelas::create($request->all());
       return redirect()->route('kelas.index')->with('success','Data telah dibuat');
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
       $kelas = Kelas::findOrFail($id);
       return view('kelas.edit',compact('kelas'));
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
       $kelas = Kelas::find($id);
       $kelas->update($request->all());
       return redirect('/kelas');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $kelas = Kelas::findOrFail($id);
       $kelas->delete();
       return redirect('/kelas');
   }
}
