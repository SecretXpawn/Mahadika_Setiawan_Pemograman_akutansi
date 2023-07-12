<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurnalmasuk extends Model
{
    use HasFactory;
    protected $table ="dikatabel_akuntansi_jurnal_masuk";
    protected $primaryKey ="nomor_jurnal";

    public function tampil_jurnal_masuk(){
        $query = \DB::table('dikatabel_akuntansi_jurnal_masuk')->get();
        return $query;
    }
}
