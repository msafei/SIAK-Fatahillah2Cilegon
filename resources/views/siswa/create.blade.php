@extends('layouts.siak')
@section('judul')
Data Siswa
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Master</a></li>
<li class="breadcrumb-item active">Data Siswa</li>
@endsection
@section('content')
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
                                    
                    <form method="post" action="{{route('siswa.store')}}" ui-jp="parsley">
        <div class="box">
          <div class="box-body">

            <div class="form-group">
              @csrf
              <label>NIS</label>
              <input name="id" type="text" class="form-control" placeholder="Nomor Induk Siswa" required>                        
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input name="nama" type="text" class="form-control" placeholder="Nama" required>                        
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
              <input name="tanggalLahir" type="date" class="form-control" placeholder="Tanggal Lahir">                        
            </div>
      
      <div class="form-group">
        		<label for="single">Kelas</label>
        		<select id="single" name="kelas_id" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}" required>
						<option value="">Pilih Kelas</option>
						@foreach($kelas as $kelas)
								<option value="{{$kelas->id}}">{{$kelas->nama}}</option>
						@endforeach
        		</select>
      			</div>

      

            <div class="form-group">
              <label>Alamat Siswa</label>
              <textarea name="alamatSiswa" type="text" class="form-control" placeholder="Alamat Siswa" rows="3" data-minwords="3"></textarea>                        
            </div>

            <div class="form-group">
                <label>Nama Ayah</label>
                <input name="namaAyah" class="form-control" placeholder="Nama Ayah">
              </div>

              <div class="form-group">
                <label>Nama Ibu</label>
                <input name="namaIbu" class="form-control" placeholder="Nama Ibu">
              </div>

            
            <div class="form-group">
              <label>Alamat Ortu</label>
              <textarea name="alamatOrtu" type="text" class="form-control" placeholder="Alamat Ortu" rows="3" data-minwords="3"></textarea>                        
            </div>

            <div class="form-group">
              <label>No Tlp Ortu</label>
              <input name="noTlpOrtu" type="text" class="form-control" placeholder="No Telp Ortu">                        
            </div>


           
          </div>
          <div class="card-action">
          <button type="submit" class="btn btn-success"><a>Simpan</a></button>
                  <a href="/siswa"><button class="btn btn-danger"><a>Batal</a></button></a>
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
