@extends('layouts.siak')
@section('judul')
Data Jenis Pembayaran
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Master</a></li>
<li class="breadcrumb-item active">Data Jenis Pembayaran</li>
@endsection
@section('content')
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">

        <form method="post" action="{{route('jenis-pembayaran.store')}}" ui-jp="parsley">
        <div class="box">
        <div class="box-body">

            <div class="form-group">
			      @csrf
              <label>Jenis Pembayaran</label>
              <input name="nama" type="text" class="form-control" placeholder="Jenis Pembayaran" required>
            </div>

          </div>
          <div class="card-action">
          <button type="submit" class="btn btn-success"><a>Simpan</a></button>
          <a href="/jenis-pembayaran" class="btn btn-danger">Batal</a>
					</div>

        </div>
      </form>
   </div>
  </div>
</div>
</div>
</div>
</div>
</div>

@endsection
