@extends('navbar-user')
@section('content')
<div class="container">
    <form method="POST" action="{{url('/save')}}" enctype="multipart/form-data">
        @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nama"> Nama</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="Nama" name="nama">
        </div>
        <div class="form-group col-md-6">
          <label for="umur"> Umur</label>
          <input type="text" class="form-control" id="inputPassword4" placeholder="Umur" name="umur">
        </div>
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
        	<option>Laki-Laki</option>
        	<option>Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="no_telp">Nomor Telepon</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Nomor Telepon" name="nomortelepon">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
                      <select name="nomorkamar">
                          <option>Pilih Kamar</option>
                          @foreach($kamar as $kamars)
                            <option value="{{$kamars->id}}">{{$kamars->id}}</option>
                          @endforeach
                      </select> 
      <div class="form-row">
        <div class="form-group col-md-6">
            <label>Data Diri</label>
            <input type="file" name="gambar" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Pesan</button>
</form>
</div>
 @endsection