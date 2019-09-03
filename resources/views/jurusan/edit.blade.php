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
                                    
                    <form method="post" action="{{route('jurusan.update',$jurusan->id)}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              @method('PATCH')
              <label>ID Jurusan</label>
              <input name="id" type="text" class="form-control" placeholder="ID Jurusan" value="{{$jurusan->id}}" disabled>                        
            </div>

						<div class="form-group">
              <label>Kode Jurusan</label>
              <input name="kode" type="text" class="form-control" placeholder="Kode Jurusan" value="{{$jurusan->kode}}">                        
            </div>

            <div class="form-group">
              <label>Nama Jurusan</label>
              <input name="nama" type="text" class="form-control" placeholder="Nama Jurusan" value="{{$jurusan->nama}}">                        
            </div>
           
          </div>
          <div class="card-action text-right">
            <a href="/jurusan"><button class="btn btn-danger"><a>Batal</a></button></a>
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