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
                                    
                    <form method="post" action="{{route('jurusan.store')}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              <label>ID Jurusan</label>
              <input name="id" type="text" class="form-control" placeholder="ID Jurusan" required>                        
            </div>

						<div class="form-group">
              <label>Kode Jurusan</label>
              <input name="kode" type="text" class="form-control" placeholder="Kode Jurusan" required>                        
            </div>

            <div class="form-group">
              <label>Nama Jurusan</label>
              <input name="nama" type="text" class="form-control" placeholder="Nama Jurusan" required>                        
            </div>
                       
          </div>
          <div class="card-action">
          <button type="submit" class="btn btn-success"><a>Simpan</a></button>
                  <a href="/jurusan" class="btn btn-danger">Batal</a>
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
