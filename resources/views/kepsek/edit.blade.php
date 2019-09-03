@extends('layouts.siak')
@section('judul')
Data Kepala Sekolah
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Master</a></li>
<li class="breadcrumb-item active">Kepala Sekolah</li>
@endsection
@section('content')
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    
                    <form method="post" action="{{route('kepsek.update',$kepsek->id)}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              @method('PATCH')
              <label>NIP</label>
              <input name="id" type="text" class="form-control" placeholder="Nomor Induk Pegawai" value="{{$kepsek->id}}" disabled>                        
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input name="nama" type="text" class="form-control" placeholder="Nama" value="{{$kepsek->nama}}">                        
            </div>

            <div class="form-group">
        <label for="single">Jenis Kelamin</label>
        <select id="single" name="jk" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}" required>
            <option value="P">Perempuan</option>
            <option value="L">Laki-Laki</option>
        </select>
      </div>

            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input name="tanggalLahir" type="text" class="form-control" placeholder="Tanggal Lahir" value="{{$kepsek->tanggalLahir}}">                        
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" rows="6" data-minwords="6" placeholder="Alamat" value="{{$kepsek->alamat}}"></textarea>
              </div>

            
            <div class="form-group">
              <label>No Telp</label>
              <input name="noTlp" type="text" class="form-control" placeholder="No Telp" value="{{$kepsek->noTlp}}">                        
            </div>

            <div class="form-group">
              <label>Email</label>
              <input name="email" type="email" class="form-control" placeholder="email" value="{{$kepsek->email}}">                        
            </div>


           
          </div>
          <div class="card-action text-right">
            <a href="/kepsek"><button class="btn btn-danger"><a>Batal</a></button></a>
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