<?php

namespace App\Http\Controllers;

use App\Models\Juser;
use App\Models\User;
use App\Models\Karyawan;
use App\Models\Product;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HalamanController extends Controller
{
    public function dashboard()
    {
        $countDU = DB::table('users')->where('roles','USER')->count();
        $countDK = DB::table('users')->where('roles','MEKANIK')->count();
        $countDP = DB::table('products')->count();
        $title = 'Dashboard';
        return view('pages.dashboard', compact('countDU', 'countDK', 'countDP'))->with('title', $title);
        
    }
    public function datauser()
    {
        $datauser = DB::table('users')->where('roles','USER')->get();
        $title = 'Data User';
        return view('pages.data_user', ['datauser'=>$datauser])->with('title', $title);;
    }
    public function karyawandata()
    {
        $datakaryawan = DB::table('users')->where('roles','MEKANIK')->get();
        $title = 'Data Karyawan';
        return view('pages.data_karyawan', ['datakaryawan'=>$datakaryawan])->with('title', $title);;
    }
    public function dataproduk(){
        $dataproduk = DB::table('products')->get();
        $title = 'Data Produk';
        return view('pages.data_produk', ['dataproduk'=>$dataproduk])->with('title', $title);;
    }
    public function delivery(){
        $title = 'Delivery';
        return view('pages.delivery')->with('title', $title);
    }
    public function transaksi(){
        $transaksi = DB::table('transaksi')->count();
        $title = 'Transaksi';
        return view('pages.transaksi', compact('transaksi'))->with('title', $title);
    }
    public function dataservice(){
        $dataservice = DB::table('transaksi')->where('status','proses')->get();
        $dataproduk = DB::table('products')->get();
        $test = DB::table('transaksi')->where('status','done')->get();
        $title = 'Data Service';
        return view('pages.data_service', ['dataservice'=>$dataservice, 'test'=>$test,'dataproduk'=>$dataproduk])->with('title', $title);
    }
    public function profil(){
        $dataadmin = DB::table('users')->where('roles','ADMIN')->get();
        $title = 'Data Profil';
        return view('pages.profil', ['dataadmin'=>$dataadmin])->with('title', $title);
    }
    
    public function editprofil(Request $request, $id=null)
	{
		if($request->isMethod('post')){
            $data = $request->all();
            User::where(['id'=>$id])->update([
                'fullname'=>$data['fullname'],
                'roles'=>$data['roles'],
                'phone_number'=>$data['phone_number'],
                'alamat'=>$data['alamat'],
                'kecamatan'=>$data['kecamatan'],
                'kabupaten'=>$data['kabupaten'],
                'kpos'=>$data['kpos']
            ]);
            return redirect()->back()->with('diky_success', 'Update Berhasil');;
        }
	}
    public function edit(Request $request, $id=null)
	{
		if($request->isMethod('post')){
            $data = $request->all();
            User::where(['id'=>$id])->update([
                'fullname'=>$data['name'],
                'email'=>$data['email'],
                'phone_number'=>$data['phone'],
                'pin_number'=>$data['pin'],
                'password'=>$data['password'],
                //'kendaraan'=>$data['kendaraan']
            ]);
            return redirect()->back()->with('diky_success', 'Update Berhasil');
        }
	}
    public function hapus(Request $request, $id)
	{
		if($request->isMethod('post')){
            User::where(['id'=>$id])->delete();
            return redirect()->back()->with('diky_hapus', 'Hapus Data Berhasil');
        }
	}
    public function editk(Request $request, $id=null)
	{
		if($request->isMethod('post')){
            $data = $request->all();
            User::where(['id'=>$id])->update([
                'fullname'=>$data['name'],
                'phone_number'=>$data['phone'],
                'roles'=>$data['status'],
                'alamat'=>$data['alamat']
            ]);
            return redirect()->back()->with('diky_success', 'Update Berhasil');
        }
	}
    public function hapusk(Request $request, $id)
	{
		if($request->isMethod('post')){
            User::where(['id'=>$id])->delete();
            return redirect()->back()->with('diky_hapus', 'Hapus Data Berhasil')->with('diky_hapus', 'Gagal');
        }
	}
    public function editp(Request $request, $id=null)
	{
		if($request->isMethod('post')){
            $data = $request->all();
            Product::where(['id'=>$id])->update([
                'product_name'=>$data['produk'],
                'price'=>$data['harga'],
                'trends'=>$data['trend']
            ]);
            return redirect()->back()->with('diky_success', 'Update Berhasil');
        }
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
	{
        {
            $data = $request ->validate([
                'no_antrian' => 'required|max:255',
                'nopol' => 'required|max:255',
                'fullname' => 'required|max:255',
                'phone' => 'required|max:255',
                'norangka' => 'required|max:255',
                'nomesin' => 'required|max:255',
                'trakit' => 'required|max:255',
                'type' => 'required|max:255',
                'km' => 'required|max:255',
                'warna' => 'required|max:255',
                'nproduk' => 'required|max:255',
                'notes' => 'required|max:255',
            ]);
            DB::table('transaksi')->insert($data);
            return redirect()->back()->with('diky_success', 'Berhasil');
        }
	}
    public function hapusp(Request $request, $id)
	{
		if($request->isMethod('post')){
            Product::where(['id'=>$id])->delete();
            return redirect()->back()->with('diky_hapus', 'Hapus Data Berhasil');
        }
	}
}
