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

<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
									<div class="col-icon">
											<div class="icon-big text-center icon-primary bubble-shadow-small">
												<i class="icon-people "></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
                                            <p class="card-category">Admin</p>
												<h4 class="card-title"><b data-plugin="counterup">{{$admin->count()}}</b></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
									<div class="col-icon">
											<div class="icon-big text-center  icon-primary bubble-shadow-small">
												<i class="icon-graduation"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
                                            <p class="card-category">Siswa</p>
												<h4 class="card-title" ><b data-plugin="counterup">{{$siswa->count()}}</b></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
									<div class="col-icon">
											<div class="icon-big text-center icon-success bubble-shadow-small">
												<i class="icon-docs"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
                                            <p class="card-category">Tunggakan Spp</p>
												<h4 class="card-title"><b  data-plugin="counterup">{{$tunggakanSpp}}</b> siswa</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
									<div class="col-icon">
											<div class="icon-big text-center icon-secondary bubble-shadow-small">
												<i class="icon-docs"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
                                            <p class="card-category">Tunggakan Lain</p>
												<h4 class="card-title"><b  data-plugin="counterup">{{$pembayaranLain}}</b> siswa</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

<div class="row">

					<div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Transaksi Hari ini</h4>

                                    <ul class="list-unstyled transaction-list slimscroll" style="max-height: 600px;">
									@foreach($laporan as $laporan)
									<li>
									@if(($laporan->kredit)>0)
                                            <i class="dripicons-arrow-up text-danger"></i>
									@else
											<i class="dripicons-arrow-down text-success"></i>
									@endif
                                            <span class="tran-text">{{$laporan->sumber}}</span>
									@if(($laporan->kredit)>0)
                                            <span class="pull-right text-danger tran-price">-{{"Rp.".number_format($laporan->kredit,0,",",",")}}</span>
									@else
											<span class="pull-right text-success tran-price">+{{"Rp.".number_format($laporan->debit,0,",",",")}}</span>
									@endif
                                            <span class="clearfix"></span>
                                        </li>
									@endforeach

                                    </ul>

                                </div>
							</div>
						


                    </div>
                        <!-- end row -->
@endsection
