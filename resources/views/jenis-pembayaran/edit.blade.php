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

                    <form method="post" action="{{route('jenis-pembayaran.update',$jenisPembayaran->id)}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              @method('PATCH')
              <label>ID</label>
              <input name="id" type="text" class="form-control" placeholder="ID Jenis Pembayaran" value="{{$jenisPembayaran->id}}" disabled>
            </div>

						<div class="form-group">
              <label>Pembayaran</label>
              <input name="nama" type="text" class="form-control" placeholder="Jenis Pembayaran" value="{{$jenisPembayaran->nama}}">
            </div>

          </div>
          <div class="card-action text-right">
            <a href="/jenis-pembayaran"><button class="btn btn-danger"><a>Batal</a></button></a>
                  <button type="submit" class="btn btn-success"><a>Ubah</a></button>

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
</div>
@endsection
