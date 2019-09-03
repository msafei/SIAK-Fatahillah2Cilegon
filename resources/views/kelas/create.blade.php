@extends('layouts.siak')
@section('judul')
Data Admin
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Master</a></li>
<li class="breadcrumb-item active">Data Admin</li>
@endsection
@section('content')
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    
                    <form method="post" action="{{route('kelas.store')}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              <label>ID Kelas</label>
              <input name="id" type="text" class="form-control" placeholder="ID Kelas" required>                        
            </div>

						<div class="form-group">
        		<label for="single">Jurusan</label>
        		<select id="single" name="jurusan_id" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}" required>
						@foreach($jurusan as $jurusan)
								<option value="{{$jurusan->id}}">{{$jurusan->kode}} - {{$jurusan->nama}}</option>
						@endforeach
        		</select>
      			</div>

            <div class="form-group">
              <label>Kelas</label>
              <input name="nama" type="text" class="form-control" placeholder="Kelas" required>                        
            </div>
                       
          </div>
          <div class="card-action">
          <button type="submit" class="btn btn-success"><a>Simpan</a></button>
                  <a href="/kelas"  class="btn btn-danger"> Batal </a>
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
