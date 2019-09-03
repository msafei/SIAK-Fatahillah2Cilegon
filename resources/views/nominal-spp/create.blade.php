@extends('layouts.siak')
@section('judul')
Nominal SPP
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Master</a></li>
<li class="breadcrumb-item active">Nominal SPP</li>
@endsection
@section('content')
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    
                    <form method="post" action="{{route('nominal-spp.store')}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">
						<div class="form-group">
						@csrf
        		<label >Kelas</label>
        		<select id="kelas" name="kelas" class="form-control js-example-basic-single" required>
						<option value=""></option>
						@foreach($kelas as $kelas)
								<option value="{{$kelas->id}}">{{$kelas->nama}}</option>
						@endforeach
				</select>
				@error('kelas')
                                                <span class="kelas" style="color:red" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
				  </div>
			

            <div class="form-group">
              <label>Nominal Pembayaran</label>
              <input name="nominal" type="text" class="form-control" placeholder="Nominal Pembayaran" required>                        
            </div>
                       
          </div>
          <div class="card-action text-right">
          <button type="submit" class="btn btn-success"><a>Simpan</a></button>
					</form>
                  <a href="/nominal-spp" class="btn btn-danger">Batal</a>
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
@section('js')
<script type="text/javascript">
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	$('#jenisPembayaran').select2({
	placeholder: 'Pilih Jenis Pembayaran',
	});
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	$('#kelas').select2({
	placeholder: 'Pilih Kelas',
	});
});
</script>
@endsection
