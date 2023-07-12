<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\jurnalmasuk;

class JurnalmasukController extends Controller
{
    public function index()
    {
        $myjurnalmasuk = new jurnalmasuk();
        $jurnalmasuk = $myjurnalmasuk->tampil_jurnal_masuk();
        
        $data = array('jurnalmasuk' => $jurnalmasuk);
        return view('jurnalmasuk/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('jurnalmasuk/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('dikatabel_akuntansi_jurnal_masuk')
         ->insert([
             'kode_jurnal'  =>  $request->kode_jurnal,
             'tanggal_masuk'  =>  $request->tanggal_masuk,
             'tanggal_keluar'  =>  $request->tanggal_keluar,
         ]);
         return redirect('jurnalmasuk');
     }
 
     public function edit($id){
         // return ('Testing');
         $jurnalmasuk = \DB::table('dikatabel_akuntansi_jurnal_masuk')->where('nomor_jurnal', $id)->first();
         //dd($akun);
         $data = array('jurnalmasuk' => $jurnalmasuk);
         return view('jurnalmasuk/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('dikatabel_akuntansi_jurnal_masuk')->where('nomor_jurnal',$request->id)
         ->update([
            'kode_jurnal'  =>  $request->kode_jurnal,
            'tanggal_masuk'  =>  $request->tanggal_masuk,
            'tanggal_keluar'  =>  $request->tanggal_keluar,
            
         ]);
         return redirect('jurnalmasuk');
     }
     public function delete ($id){
        $query = \DB::table('dikatabel_akuntansi_jurnal_masuk')->where('nomor_jurnal',$id)->delete();
        return redirect('jurnalmasuk');
    }
}