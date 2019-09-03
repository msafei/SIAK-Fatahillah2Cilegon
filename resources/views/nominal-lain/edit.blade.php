@extends('layouts.siak')
@section('judul')
Nominal Pembayaran Lain
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Setting Keuangan</a></li>
<li class="breadcrumb-item active">Nominal Pembayaran Lain</li>
@endsection
@section('content')
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    
                    <form method="post" action="{{route('nominal-lain.update',$nominalLain->id)}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              @method('PATCH')
              <label>ID Nominal Pembayaran</label>
              <input name="id" type="text" class="form-control" placeholder="ID Nominal Pembayaran" value="{{$nominalLain->id}}" disabled>                        
            </div>

						<div class="form-group">
        		<label for="single">Jenis Pembayaran</label>
        		<select id="jenis_pembayaran_id" name="jenis_pembayaran_id" class="form-control select2" ui-jp="select2"  ui-options="{theme: 'bootstrap'}">
						@foreach($jenisPembayaran as $key => $jenisPembayaran)
								<option value="{{$jenisPembayaran->nama}}"
								@if ($jenisPembayaran->nama == $nominalLain->jenis_pembayaran_id)
								selected
								@endif
								>{{$jenisPembayaran->nama}}</option>
						@endforeach
        		</select>
				  </div>
				  
				  
				  <div class="form-group">
        		<label for="single">Kelas</label>
        		<select id="kelas_id" name="kelas_id" class="form-control select2" ui-jp="select2"  ui-options="{theme: 'bootstrap'}">
						@foreach($kelas as $key => $kelas)
								<option value="{{$kelas->id}}"
								@if ($kelas->id == $nominalLain->kelas_id)
								selected
								@endif
								>{{$kelas->nama}}</option>
						@endforeach
        		</select>
      			</div>

						<div class="form-group">
              <label>Nominal Pembayaran</label>
              <input name="nominal" type="text" class="form-control" placeholder="Nominal Pembayaran" value="{{$nominalLain->nominal}}">                        
            </div>

          </div>
          <div class="card-action text-right">
					<button type="submit" class="btn btn-success"><a>Ubah</a></button>
					</form>
            <a href="/nominal-lain" class="btn btn-danger">Batal</a>
                  
                  
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