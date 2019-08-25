@extends('layouts.siak')
@section('db-active')
active
@endsection
@section('judul')
Dashboard
@endsection
@section('breadcrumb')
<li class="breadcrumb-item active">Welcome to SIAK Fatahillah 2 Cilegon</li>
<!-- <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
<li class="breadcrumb-item"><a href="#">Layouts</a></li>
<li class="breadcrumb-item active">Dark Menu</li> -->
@endsection
@section('content')
<div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-people float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Admin</h6>
                                    <h2 class="m-b-20" data-plugin="counterup">{{$admin->count()}}</h2>
                                    <span class="text-muted">Admin masih aktif</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class=" icon-graduation float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Siswa</h6>
                                    <h2 class="m-b-20"><span data-plugin="counterup">{{$siswa->count()}}</span></h2>
                                    <span class="text-muted">Siswa masih aktif</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-docs float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Tunggakan SPP</h6>
                                    <h2 class="m-b-20"><span data-plugin="counterup">{{$tunggakanSpp->count()}}</span></h2>
                                    <span class="text-muted">Siswa masih menunggak</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-docs float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Tunggakan Lain</h6>
                                    <h2 class="m-b-20" data-plugin="counterup">5</h2>
                                    <span class="text-muted">Siswa masih menunggak</span>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
@endsection
