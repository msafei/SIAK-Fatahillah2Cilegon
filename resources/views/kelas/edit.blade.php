@extends('layouts.siak')
@section('content')
<div class="page-inner">
					<div class="page-header">
          <a href="/kelas"><button type="button" class="btn btn-icon btn-link">
						<i class="fas fa-arrow-left"></i></button></a>       
						<h4 class="page-title">Edit Kelas</h4>
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
								<a href="/kelas">Data Kelas</a>
              </li>
              <li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
              <li class="nav-item">
								<a >Edit Kelas</a>
							</li>
							</ul>
					</div>
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
            <a href="/kelas"><button class="btn btn-danger"><a>Batal</a></button></a>
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