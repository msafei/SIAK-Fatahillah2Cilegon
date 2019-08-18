<?php

namespace App\Http\Controllers;
use App\Kepsek;
use App\User;
use Illuminate\Http\Request;

class KepsekController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kepsek = Kepsek::all();
        return view ('kepsek.index',compact('kepsek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kepsek.create');
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
        
        $kepsek = new Kepsek;
        $kepsek->role = 'kepsek';
        $kepsek->name = $request->nama;
        $kepsek->email = $request->email;
        $kepsek->username = $request->id;
        $kepsek->password = bcrypt($request->id);
        $kepsek->remember_token = str_random(60);
        $kepsek->save();
        
        $request->request->add(['user_id' => $user->id]);
        $kepsek = Kepsek::create($request->all());
        return redirect()->route('kepsek.index')->with('success','Data telah dibuat');
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
        $kepsek = Kepsek::findOrFail($id);
        return view('kepsek.edit',compact('kepsek'));
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
        $kepsek = Kepsek::find($id);
        $kepsek->update($request->all());
        return redirect('/kepsek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kepsek = Kepsek::findOrFail($id);
        $kepsek->delete();
        return redirect('/kepsek');
    }
}
