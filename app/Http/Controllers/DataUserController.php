<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Karyawan;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class DataUserController extends Controller
{
    public function index()
    {
        $datauser = DB::table('data_user')->get();
        $title = 'Data User';
        return view('pages.data_user', ['datauser'=>$datauser])->with('title', $title);
    }
    public function karyawandata()
    {
        $datakaryawan = DB::table('data_karyawan')->get();
        $title = 'Data Karyawan';
        return view('pages.data_karyawan', ['datakaryawan'=>$datakaryawan])->with('title', $title);
    }
    
}
