<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Print SPP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('assets/js/modernizr.min.js')}}"></script>

    </head>


    <body>

                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                            <div class="row">
                                 <div class="col-md-12">
                                    <div class="hidden-print mt-4 mb-4">
                                            <div class="text-right">
                                                <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print m-r-5"></i> Print</a>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 border">
                                   <div class="card-box">
                                   <div class="row">

                                           <div class="col-7">
                                               
                                       <div class="clearfix">
                                           <div class="mt-2">
                                               <img src="{{ asset('assets/images/logo_sm.png')}}" alt="" height="50">
                                           </div>
                                       </div>
                                               <div>
                                                   <h6>
                                                   <p><strong>No Transaksi : </strong>{{$tunggakanSpp->id}}<br>
                                                       <strong>Tanggal : </strong> {{date('d/m/Y', strtotime($tunggakanSpp->tanggal))}} <br>
                                                       </p>
                                                   </h6>
                                               </div>
                                           </div>

                                               <div class="col-5 mt-3">
                                               <div>
                                                   <h6>
                                                   <p> 
                                                       <strong>NIS : </strong>{{$tunggakanSpp->siswa->id}}<br>
                                                       <strong>Nama : </strong>{{$tunggakanSpp->siswa->nama}}<br>
                                                       <strong>Kelas : </strong>{{$tunggakanSpp->siswa->kelas->nama}}<br>
                                                       <strong>Status Pembayaran : </strong>
                                                       @if(($tunggakanSpp->sisaBulan)==0)
                                                       <span class="badge  badge-success" >Lunas</span>
                                                       @else
                                                       <span class="badge  badge-warning" >Belum Lunas</span>
                                                       @endif
                                                       </p>
                                                   </h6>
                                               </div>
                                           </div><!-- end col -->
   
                                       </div>
                                       <!-- end row -->
   
                                       <div class="row">
                                           <div class="col-md-12">
                                               <div class="table-responsive">
                                                   <table class="table">
                                                       <thead>
                                                       <tr>
                                                           <th style="width:33%">Pembayaran</th>
                                                           <th class="text-center">Nominal</th>
                                                           <th class="text-right">Total</th>
                                                       </tr></thead>
                                                       <tbody>
                                                       <tr>
                                                           <td>
                                                               <b>SPP : {{$tunggakanSpp->siswa->kelas->nama}}</b> ({{$tunggakanSpp->totalBulan}} Bulan)
                                                               @if(($tunggakanSpp->potongan)==0)
                                                               <h6>{{$tunggakanSpp->bulan}}</h6>
                                                               @else
                                                               <h6>
                                                               <b>Potongan : </b>{{"Rp.".number_format($tunggakanSpp->potongan,0,",",",")}}<br>
                                                                </h6>
                                                               <h6>
                                                               {{$tunggakanSpp->bulan}}
                                                               </h6>
                                                               @endif 
                                                               
                                                           </td>
                                                           <td class="text-center"><h4>{{"Rp.".number_format($tunggakanSpp->nominal,0,",",",")}} x {{$tunggakanSpp->totalBulan}}</h4></td>
                                                           <td class="text-right"><h4>{{"Rp.".number_format($tunggakanSpp->total,0,",",",")}}</h4></td>
                                                        </tr>          
                                                       </tbody>
                                                   </table>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-4">
                                               <div class="clearfix">
                                                   <h6 class="text-muted">Catatan:</h6>
                                                   <small>
                                                   Simpan tanda bukti pembayaran ini sebagai bukti 
                                                   anda telah melakukan pembayaran.
                                                   </small>
                                               </div>
   
                                           </div>
                                           <div class="col-4">
                                               <div>
                                               <center>
                                                   <p>Tanda tangan<br>Admin</p>
                                                   <br><br>
                                                   <p><b>{{ Auth::user()->name }}</b></p>
                                               </center>
                                               </div>
                                               <div class="clearfix"></div>
                                           </div>
                                           <div class="col-4">
                                               <div>
                                               <center>
                                                   <p>Tanda tangan<br>Pembayar</p>
                                                   <br><br>
                                                   <p><b>______</b></p>
                                               </center>
                                               </div>
                                               <div class="clearfix"></div>
                                           </div>
                                       </div>
   
                                   </div>
   
                               </div>

                               <div class="col-md-6 border">
                                   <div class="card-box">
                                   <div class="row">

                                           <div class="col-7">
                                               
                                       <div class="clearfix">
                                           <div class="mt-2">
                                               <img src="{{ asset('assets/images/logo_sm.png')}}" alt="" height="50">
                                           </div>
                                       </div>
                                               <div>
                                                   <h6>
                                                   <p><strong>No Transaksi : </strong>{{$tunggakanSpp->id}}<br>
                                                       <strong>Tanggal : </strong> {{date('d/m/Y', strtotime($tunggakanSpp->tanggal))}} <br>
                                                       </p>
                                                   </h6>
                                               </div>
                                           </div>

                                               <div class="col-5 mt-3">
                                               <div>
                                                   <h6>
                                                   <p> 
                                                       <strong>NIS : </strong>{{$tunggakanSpp->siswa->id}}<br>
                                                       <strong>Nama : </strong>{{$tunggakanSpp->siswa->nama}}<br>
                                                       <strong>Kelas : </strong>{{$tunggakanSpp->siswa->kelas->nama}}<br>
                                                       <strong>Status Pembayaran : </strong>
                                                       @if(($tunggakanSpp->sisaBulan)==0)
                                                       <span class="badge  badge-success" >Lunas</span>
                                                       @else
                                                       <span class="badge  badge-warning" >Belum Lunas</span>
                                                       @endif
                                                       </p>
                                                   </h6>
                                               </div>
                                           </div><!-- end col -->
   
                                       </div>
                                       <!-- end row -->
   
                                       <div class="row">
                                           <div class="col-md-12">
                                               <div class="table-responsive">
                                                   <table class="table">
                                                       <thead>
                                                       <tr>
                                                           <th style="width:33%">Pembayaran</th>
                                                           <th class="text-center">Nominal</th>
                                                           <th class="text-right">Total</th>
                                                       </tr></thead>
                                                       <tbody>
                                                       <tr>
                                                           <td>
                                                               <b>SPP : {{$tunggakanSpp->siswa->kelas->nama}}</b> ({{$tunggakanSpp->totalBulan}} Bulan)
                                                               @if(($tunggakanSpp->potongan)==0)
                                                               <h6>{{$tunggakanSpp->bulan}}</h6>
                                                               @else
                                                               <h6>
                                                               <b>Potongan : </b>{{"Rp.".number_format($tunggakanSpp->potongan,0,",",",")}}<br>
                                                                </h6>
                                                               <h6>
                                                               {{$tunggakanSpp->bulan}}
                                                               </h6>
                                                               @endif 
                                                               
                                                           </td>
                                                           <td class="text-center"><h4>{{"Rp.".number_format($tunggakanSpp->nominal,0,",",",")}} x {{$tunggakanSpp->totalBulan}}</h4></td>
                                                           <td class="text-right"><h4>{{"Rp.".number_format($tunggakanSpp->total,0,",",",")}}</h4></td>
                                                        </tr>          
                                                       </tbody>
                                                   </table>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-4">
                                               <div class="clearfix">
                                                   <h6 class="text-muted">Catatan:</h6>
                                                   <small>
                                                   Simpan tanda bukti pembayaran ini sebagai bukti 
                                                   anda telah melakukan pembayaran.
                                                   </small>
                                               </div>
   
                                           </div>
                                           <div class="col-4">
                                               <div>
                                               <center>
                                                   <p>Tanda tangan<br>Admin</p>
                                                   <br><br>
                                                   <p><b>{{ Auth::user()->name }}</b></p>
                                               </center>
                                               </div>
                                               <div class="clearfix"></div>
                                           </div>
                                           <div class="col-4">
                                               <div>
                                               <center>
                                                   <p>Tanda tangan<br>Pembayar</p>
                                                   <br><br>
                                                   <p><b>______</b></p>
                                               </center>
                                               </div>
                                               <div class="clearfix"></div>
                                           </div>
                                       </div>
   
                                   </div>
   
                               </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/waves.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.app.js')}}"></script>

    </body>
</html>