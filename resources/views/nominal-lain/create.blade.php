@extends('layouts.siak')
@section('content')
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    
                    <form method="post" action="{{route('nominal-lain.store')}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              <label>ID</label>
              <input name="id" type="text" class="form-control" placeholder="ID Nominal Pembayaran" required>                        
            </div>

      <div class="form-group">
			<label >Nama Pembayaran</label>
        		<select id="jenis_pembayaran_id" name="jenis_pembayaran_id" class="form-control js-example-basic-single" required>
						<option value=""></option>
						@foreach($jenisPembayaran as $jenisPembayaran)
								<option value="{{$jenisPembayaran->nama}}">{{$jenisPembayaran->nama}}</option>
						@endforeach
				</select>
			</div>
			<div class="form-group">
			<label >Kelas</label>
        		<select id="kelas_id" name="kelas_id" class="form-control js-example-basic-single" required>
						<option value=""></option>
						@foreach($kelas as $kelas)
								<option value="{{$kelas->id}}">{{$kelas->nama}}</option>
						@endforeach
				</select>
			</div>

            <div class="form-group">
              <label>Nominal Pembayaran</label>
              <input name="nominal" type="text" class="form-control" placeholder="Nominal Pembayaran" required>                        
            </div>
                       
          </div>
          <div class="card-action text-right">
          <button type="submit" class="btn btn-success"><a>Simpan</a></button>
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
@endsection
