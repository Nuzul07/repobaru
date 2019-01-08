@extends('layouts.admin')
@section('title')
Edit Kost
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-white" style="background-color: #25A9A0;">Edit Kost</div>
        <div class="card-body">
         <form action="{{url('admin/kamar/update')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Nomor Kost</label>
            <input type="number" class="form-control" name="nomorkamar" id="formGroupExampleInput" 
            placeholder="Nomor Kost" value="{{$kamar->nomorkamar}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Type Kost</label>
            <input type="text" class="form-control" name="typekamar" id="formGroupExampleInput" 
            placeholder="Type Kost" value="{{$kamar->typekamar}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Jumlah Kamar</label>
            <input type="number" class="form-control" name="jumlahkamar" id="formGroupExampleInput" 
            placeholder="Jumlah Kamar" value="{{$kamar->jumlahkamar}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Picture</label>
            <input type="file" class="form-control" name="gambar" id="formGroupExampleInput" 
            placeholder="Picture" value="{{$kamar->gambar}}" required>
          </div>
          @csrf
          <input type="hidden" name="id" value="{{$kamar->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection