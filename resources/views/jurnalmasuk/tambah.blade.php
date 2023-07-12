@extends('layout.main')
@section('content')

<h1>Tambah jurnal masuk</h1>
<div class="card">
<div class="card-header">

<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('jurnalmasuk/tambah_proses') }}" method="POST">
@csrf
Kode Jurnal <input type="text" name="kode_jurnal"><br>
Tanggal Masuk <input type="date" name="tanggal_masuk"><br>
Tanggal Keluar <input type="date" name="tanggal_keluar"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection