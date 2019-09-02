<?php

namespace App\Http\Controllers;
use App\Siswa;
use App\Admin;
use App\Laporan;
use App\PembayaranSpp;
use App\PembayaranLain;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $date = date('Y-m-d');
        $laporan = Laporan::all()->where('tanggal',$date);

        $siswa = Siswa::all();
        $admin = Admin::all();
        $pembayaranSpp = PembayaranSpp::all();
        $Spp = $pembayaranSpp->filter(function($pembayaranSpp){
            return $pembayaranSpp['totalBulan'] < 12;
        });

        $lain = PembayaranLain::all()->groupBy('siswa_id');

        $a = $Spp->count();
        $b = $siswa->count();
        $tunggakanSpp = $b - $a;

        $c = $lain->count();
        $pembayaranLain = $b - $c ;

        return view('home',compact('siswa','admin','tunggakanSpp','pembayaranLain','laporan'));
    }
}
