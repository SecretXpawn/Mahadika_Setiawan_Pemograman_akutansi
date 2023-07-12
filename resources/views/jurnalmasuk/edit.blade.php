@extends('layout.main')
@section('content')
<h1>Ubah Data Transaksi jurnal masuk</h1>
<form action="{{ asset('jurnalmasuk/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $jurnalmasuk->nomor_jurnal ?>">
Kode Jurnal <input type="text" name="kode_jurnal" value="<?php echo $jurnalmasuk->kode_jurnal ?>"><br>
Tanggal Masuk <input type="date" name="tanggal_masuk" value="<?php echo $jurnalmasuk->tanggal_masuk ?>"><br>
Tanggal Keluar <input type="date" name="tanggal_keluar" value="<?php echo $jurnalmasuk->tanggal_keluar ?>"><br>
<input type="submit" value="Simpan">
</form>     
@endsection