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
                                    <i class="icon-layers float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                                    <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                                    <span class="badge badge-custom"> +11% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-paypal float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                                    <h2 class="m-b-20">$<span data-plugin="counterup">46,782</span></h2>
                                    <span class="badge badge-danger"> -29% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-chart float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Average Price</h6>
                                    <h2 class="m-b-20">$<span data-plugin="counterup">15.9</span></h2>
                                    <span class="badge badge-custom"> 0% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-rocket float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                                    <h2 class="m-b-20" data-plugin="counterup">1,890</h2>
                                    <span class="badge badge-custom"> +89% </span> <span class="text-muted">Last year</span>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
@endsection
