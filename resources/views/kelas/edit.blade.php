@extends('layouts.siak')
@section('judul')
Data Kelas
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Master</a></li>
<li class="breadcrumb-item active">Data Kelas</li>
@endsection
@section('content')
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    
                    <form method="post" action="{{route('kelas.update',$kelas->id)}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              @method('PATCH')
              <label>ID Kelas</label>
              <input name="id" type="text" class="form-control" placeholder="ID Kelas" value="{{$kelas->id}}" disabled>                        
            </div>

						<div class="form-group">
              <label>Jurusan</label>
              <input name="jurusan_id" type="text" class="form-control" placeholder="Jurusan" value="{{$kelas->jurusan_id}}">                        
            </div>

            <div class="form-group">
              <label>Kelas</label>
              <input name="nama" type="text" class="form-control" placeholder="Kelas" value="{{$kelas->nama}}">                        
            </div>
           
          </div>
          <div class="card-action text-right">
            <a href="/kelas" class="btn btn-danger">Batal</a>
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