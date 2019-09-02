@extends('layouts.siak')
@section('css')
<link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('title')
Laporan Arus Kas SMK YP Fatahillah 2 Cilegon
@endsection
@section('judul')
Laporan
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Pembayaran</a></li>
<li class="breadcrumb-item active">Laporan</li>
@endsection
@section('content')
 <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">  
                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Sumber</th>
                                            <th>Keterangan</th>
                                            <th>Akun</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($laporan as $laporan)
                                        <tr>
                                            <td>{{$laporan->tanggal}}</td>
                                            <td>{{$laporan->sumber}}</td>
                                            <td>{{$laporan->ket}}</td>
                                            <td>{{$laporan->akun}}</td>
                                            <td>{{$laporan->debit}}</td>
                                            <td>{{$laporan->kredit}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                            </div>
                        </div> <!-- end row -->
@endsection
@section('js')
<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {
                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
} );
</script>
        @endsection