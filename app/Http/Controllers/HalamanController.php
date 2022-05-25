<?php

namespace App\Http\Controllers;

use App\Models\Juser;
use App\Models\User;
use App\Models\Karyawan;
use App\Models\Produk;
use App\Models\Transaksi;
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
        $transaksi = DB::table('transaksi')->count();
        $title = 'Transaksi';
        return view('pages.transaksi', compact('transaksi'))->with('title', $title);
    }
    public function dataservice(){
        $title = 'Data Service';
        return view('pages.data_service')->with('title', $title);
    }
    public function profil(){
        $dataadmin = DB::table('users')->get();
        $title = 'Data Profil';
        return view('pages.profil', ['dataadmin'=>$dataadmin])->with('title', $title);
    }
    
    public function editprofil(Request $request, $id=null)
	{
		if($request->isMethod('post')){
            $data = $request->all();
            User::where(['id'=>$id])->update([
                'name'=>$data['name'],
                'phone'=>$data['phone'],
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
            return redirect()->back()->with('diky_hapus', 'Hapus Data Berhasil')->with('diky_hapus', 'Gagal');
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
                'name' => 'required|max:255',
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
            Produk::where(['id'=>$id])->delete();
            return redirect()->back()->with('diky_hapus', 'Hapus Data Berhasil');
        }
	}
}
