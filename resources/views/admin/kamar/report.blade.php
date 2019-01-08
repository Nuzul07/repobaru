<title>Rekap Data Buku</title>
<center>
  <h1>Rekap Daftar Buku</h1>
</center>

@foreach($kamar as $q)
<hr>
Nomor Kamar : {{$q->nomorkamar}} <br>
Type Kamar : {{$q->typekamar}} <br>
Jumlah Kamar : {{$q->jumlahkamar}} <br>
<br>
<br>	
Gambar : <img src="./gambar/{{$q->gambar}}" width="10%" height="1%">
<hr>
@endforeach