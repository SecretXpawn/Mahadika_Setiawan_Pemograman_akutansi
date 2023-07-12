<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akuntansitransaksi_model;

class homecontroler extends Controller
{
    //
    public function index(){
        return view('layout/main');
    }
}
 