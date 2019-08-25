@@extends('layouts.siak')
@section('content')
<div class="page-inner">
					<div class="page-header">
          <a href="/nominal-pembayaran"><button type="button" class="btn btn-icon btn-link">
						<i class="fas fa-arrow-left"></i></button></a>       
						<h4 class="page-title">Edit Nominal Pembayaran</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="/home">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="/nominal-pembayaran">Data Nominal Pembayaran</a>
              </li>
              <li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
              <li class="nav-item">
								<a >Edit Nominal Pembayaran</a>
							</li>
							</ul>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    
                    <form method="post" action="{{route('nominal-pembayaran.update',$nominalPembayaran->id)}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              @method('PATCH')
              <label>ID Nominal Pembayaran</label>
              <input name="id" type="text" class="form-control" placeholder="ID Nominal Pembayaran" value="{{$nominalPembayaran->id}}" disabled>                        
            </div>

						<div class="form-group">
        		<label for="single">Jenis Pembayaran</label>
        		<select id="single" name="jenis_pembayaran_id" class="form-control select2" ui-jp="select2"  ui-options="{theme: 'bootstrap'}">
						@foreach($jenisPembayaran as $key => $jenisPembayaran)
								<option value="{{$jenisPembayaran->id}}"
								@if ($jenisPembayaran->id == $nominalPembayaran->jenis_pembayaran_id)
								selected
								@endif
								>{{$jenisPembayaran->nama}}</option>
						@endforeach
        		</select>
      			</div>

						<div class="form-group">
              <label>Nominal Pembayaran</label>
              <input name="nominal" type="text" class="form-control" placeholder="Nominal Pembayaran" value="{{$nominalPembayaran->nominal}}">                        
            </div>

          </div>
          <div class="card-action text-right">
					<button type="submit" class="btn btn-success"><a>Ubah</a></button>
					</form>
            <a href="/nominal-pembayaran"><button class="btn btn-danger"><a>Batal</a></button></a>
                  
                  
								</div>
   
        </div>
      
                        </div> 
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection