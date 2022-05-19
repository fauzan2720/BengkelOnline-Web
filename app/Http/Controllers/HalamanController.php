<?php

namespace App\Http\Controllers;

use App\Models\Juser;
use App\Models\Karyawan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HalamanController extends Controller
{
    public function dashboard()
    {
        $countDU = DB::table('data_user')->count();
        $countDK = DB::table('data_karyawan')->count();
        $title = 'Dashboard';
        return view('pages.dashboard', compact('countDU', 'countDK'))->with('title', $title);
        
    }
    public function datauser()
    {
        $datauser = DB::table('data_user')->get();
        $title = 'Data User';
        return view('pages.data_user', ['datauser'=>$datauser])->with('title', $title);;
    }
    public function karyawandata()
    {
        $datakaryawan = DB::table('data_karyawan')->get();
        $title = 'Data Karyawan';
        return view('pages.data_karyawan', ['datakaryawan'=>$datakaryawan])->with('title', $title);;
    }
    public function dataproduk(){
        $dataproduk = DB::table('data_produk')->get();
        $title = 'Data Produk';
        return view('pages.data_produk', ['dataproduk'=>$dataproduk])->with('title', $title);;
    }
    public function delivery(){
        $title = 'Delivery';
        return view('pages.delivery')->with('title', $title);
    }
    public function transaksi(){
        $title = 'Transaksi';
        return view('pages.transaksi')->with('title', $title);
    }
    public function dataservice(){
        $title = 'Data Service';
        return view('pages.data_service')->with('title', $title);
    }
    public function profil(){
        $title = 'Data Profil';
        return view('pages.profil')->with('title', $title);
    }
    public function edit(Request $request, $id=null)
	{
		if($request->isMethod('post')){
            $data = $request->all();
            Juser::where(['id'=>$id])->update([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'phone'=>$data['phone'],
                'pin'=>$data['pin'],
                'password'=>$data['password'],
                'kendaraan'=>$data['kendaraan']
            ]);
            return redirect()->back()->with('diky_success', 'Update Berhasil');
        }
	}
    public function hapus(Request $request, $id)
	{
		if($request->isMethod('post')){
            Juser::where(['id'=>$id])->delete();
            return redirect()->back()->with('diky_hapus', 'Hapus Data Berhasil');
        }
	}
    public function editk(Request $request, $id=null)
	{
		if($request->isMethod('post')){
            $data = $request->all();
            Karyawan::where(['id'=>$id])->update([
                'name'=>$data['name'],
                'phone'=>$data['phone'],
                'status'=>$data['status'],
                'alamat'=>$data['alamat']
            ]);
            return redirect()->back()->with('diky_success', 'Update Berhasil');
        }
	}
    public function hapusk(Request $request, $id)
	{
		if($request->isMethod('post')){
            Karyawan::where(['id'=>$id])->delete();
            return redirect()->back()->with('diky_hapus', 'Hapus Data Berhasil');
        }
	}
    public function editp(Request $request, $id=null)
	{
		if($request->isMethod('post')){
            $data = $request->all();
            Produk::where(['id'=>$id])->update([
                'id_produk'=>$data['id_produk'],
                'produk'=>$data['produk'],
                'harga'=>$data['harga'],
                'trend'=>$data['trend']
            ]);
            return redirect()->back()->with('diky_success', 'Update Berhasil');
        }
	}
    public function hapusp(Request $request, $id)
	{
		if($request->isMethod('post')){
            Produk::where(['id'=>$id])->delete();
            return redirect()->back()->with('diky_hapus', 'Hapus Data Berhasil');
        }
	}
}
