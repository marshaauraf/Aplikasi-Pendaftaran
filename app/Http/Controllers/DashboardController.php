<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function landingpage(){
        $datas = Siswa::get();
        return view('kerangka.master', compact('datas'));
    }

    public function dashboard(){
        $datas = Siswa::get();
        return view('dashboard', compact('datas'));
    }
}
