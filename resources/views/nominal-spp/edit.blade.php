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
                                    
                    <form method="post" action="{{route('nominal-spp.update',$nominalSpp->id)}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              @method('PATCH')
              <label>ID Nominal Pembayaran</label>
              <input name="id" type="text" class="form-control" placeholder="ID Nominal Pembayaran" value="{{$nominalSpp->id}}" disabled>                        
            </div>

			<div class="form-group">
        		<label for="single">Kelas</label>
        		<select id="single" name="kelas_id" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}" required>
						<option value="">Pilih Kelas</option>
						@foreach($kelas as $kelas)
								<option value="{{$kelas->id}}" 
                @if ($kelas->id == $nominalSpp->kelas_id)
								selected
								@endif
                >{{$kelas->nama}}</option>
						@endforeach
        		</select>
      			</div>

						<div class="form-group">
              <label>Nominal Pembayaran</label>
              <input name="nominal" type="text" class="form-control" placeholder="Nominal Pembayaran" value="{{$nominalSpp->nominal}}">                        
            </div>

          </div>
          <div class="card-action text-right">
					<button type="submit" class="btn btn-success"><a>Ubah</a></button>
					</form>
            <a href="/nominal-spp"  class="btn btn-danger"> Batal </a>
                  
                  
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