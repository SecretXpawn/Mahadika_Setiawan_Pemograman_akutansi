@extends('layout.main')
@section('content')

<h1>Master Transaksi</h1>
<div class="card">
<div class="card-header">
<a href="{{ asset('jurnalmasuk/tambah')  }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
 <td>No</td>
    <td>Kode Jurnal</td>
    <td>Tanggal Masuk</td>
    <td>Tanggal Keluar</td>

    <td>Aksi</td>
 </tr> 
 </thead>

    <tbody>  
<?php 
$no=0;
foreach ($jurnalmasuk as $rows){
$no++;
?>
<tr>
<td>{{ $no }}</td>
    <td>{{ $rows->kode_jurnal }}</td>
    <td>{{ $rows->tanggal_masuk }}</td>
    <td>{{ $rows->tanggal_keluar }}</td>
   

    <td>
        <a href="{{ asset('jurnalmasuk/edit/'.$rows->nomor_jurnal ) }}">Edit</a>
        <a href="{{ asset('jurnalmasuk/delete/'.$rows->nomor_jurnal	 ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
 </tbody>
</table>
</div>
</div>
@endsection