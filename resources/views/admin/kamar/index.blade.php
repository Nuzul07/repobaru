@extends('layouts.admin')
@section('title')
Kamar Kost Dashboard
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-white" style="background-color: #25A9A0;">Daftar Kost</div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nomor Kost</th>
                <th scope="col">Tipe Kost</th>
                <th scope="col">Jumlah Kamar</th>
                <th scope="col">Gambar</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i= 1;
              $kamar = \App\Kamar::all();
              ?>
              @foreach($kamar as $q)
              <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$q->nomorkamar}}</td>
                <td>{{$q->typekamar}}</td>
                <td>{{$q->jumlahkamar}}</td>
                <td><img src="{{url('/gambar/', $q->gambar)}}" style="width: 20%;height: 20%;"></td>
                <td>
                <a href="{{url('admin/kamar/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"> Edit     </i></a>
                 <a href="{{url('admin/kamar/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"> Delete</i></a>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        <hr>
        <li class="list-group-item float-right">
          <a href="{{url('admin/kamar/add')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus-circle"></i></a>
        </li>
        <li class="list-group-item float-right">
          <a href="{{url('admin/kamar/reportkamar')}}" class="btn btn-success btn-sm"><i class="fa fa-file-export"></i></a>
        </li>
      </div>
    </div>
  </div>
</div>
</div>
@endsection