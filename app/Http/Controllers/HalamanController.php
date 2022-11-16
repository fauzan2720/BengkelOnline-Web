<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Transaksi;
use App\Models\Location;
use App\Models\CallMechanic;
use App\Models\ProductGallery;
use App\Models\TransactionItem;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HalamanController extends Controller
{
    public function dashboard()
    {
        $countDD = 0;
        $countDTransactions = 0;
        $countDT = 0;
        $countDDT = 0;

        if (Auth::check()) {
            $countDU = DB::table('users')->where('roles', 'USER')->count();
            $countDK = DB::table('users')->where('roles', 'MEKANIK')->count();
            $countDP = DB::table('products')->count();

            $alldeliveryservice = CallMechanic::all();
            $alltransaction = Transaction::all();
            $alltransactionservice = Transaksi::all();
            $alldataservice = Transaksi::where('status', 'done')->get();
            foreach ($alldeliveryservice as $data) {
                if (date('Y-m', strtotime($data->updated_at)) == date('Y-m')) {
                    $countDD++;
                }
            }
            foreach ($alltransaction as $data) {
                if (date('Y-m', strtotime($data->updated_at)) == date('Y-m')) {
                    $countDTransactions++;
                }
            }
            foreach ($alltransactionservice as $data) {
                if (date('Y-m', strtotime($data->updated_at)) == date('Y-m')) {
                    $countDT++;
                }
            }
            foreach ($alldataservice as $data) {
                if (date('Y-m', strtotime($data->updated_at)) == date('Y-m')) {
                    $countDDT++;
                }
            }

            // $countDD = DB::table('call_mechanics')->count();
            // $countDTransactions = DB::table('transactions')->count();
            // $countDT = DB::table('transaksi')->count();
            // $countDDT = DB::table('transaksi')->where('status', 'done')->count();

            $title = 'Dashboard';

            return view('pages.dashboard', compact(
                'countDU', 'countDK', 'countDP', 'countDD', 'countDTransactions', 'countDT', 'countDDT'
                ))->with('title', $title);
        }
        return redirect('/login');
    }

    public function datauser()
    {
        $datauser = User::where('roles', 'USER')->orderBy('updated_at', 'desc')->paginate(10);
        $title = 'Data User';
        
        return view('pages.data_user', ['datauser' => $datauser])->with('title', $title);
    }

    public function createdatauser(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $request->validate([
            'fullname' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required'],
            'password' => ['required'],
        ]);

        $data = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => $request->password,
        ]);

        return redirect('data_user' . $request->product_id)->with([
            'success', 'Data berhasil ditambahkan',
            $data
        ]);
    }

    public function karyawandata()
    {
        $datakaryawan = DB::table('users')->where('roles', 'MEKANIK')->orderBy('updated_at', 'desc')->paginate(10);
        $title = 'Data Karyawan';

        return view('pages.data_karyawan', ['datakaryawan' => $datakaryawan])->with('title', $title);;
    }

    public function dataproduk()
    {

        $dataproduk = DB::table('products')->orderBy('updated_at', 'desc')->paginate(10);
        $datagaleriproduk = ProductGallery::all();

        $title = 'Data Produk';

        return view('pages.data_produk', ['dataproduk' => $dataproduk, 'datagaleriproduk' => $datagaleriproduk])->with('title', $title);;
    }

    public function delivery()
    {

        $datad = DB::table('call_mechanics')->where('status', 'proses')->get();

        $mechanic = DB::table('users')->where('roles', 'MEKANIK')->get();

        $title = 'Delivery Service Online';

        return view('pages.delivery', ['datadelivery' => CallMechanic::all()->where('status', 'proses'), 'datadelivery3' => CallMechanic::all()->where('status', 'diselesaikan'), 'datadelivery2' => CallMechanic::all()->where('status', 'perjalanan'), 'datadelivery4' => CallMechanic::all()->where('status', 'ditolak'), 'location' => Location::all(), 'mechanic' => $mechanic])->with('title', $title);
    }

    public function orders()
    {

        $title = 'Manajemen Transaksi';

        return view('pages.orders', ['dataorders'=>Transaction::all()->where('status','PENDING'),'dataorders0'=>Transaction::all()->where('status','DIKEMAS'),'dataorders1'=>Transaction::all()->where('status','DIKIRIM'),'dataorders2'=>Transaction::all()->where('status','DITERIMA'),'dataorders3'=>Transaction::all()->where('status','DITOLAK'),'location'=>Location::all()])->with('title', $title);
    }

    public function tolakorder(Request $request, $id = null)

    {

        if ($request->isMethod('post')) {

            Transaction::where(['id' => $id])->update([

                'status' => "DITOLAK",

            ]);

            return redirect()->back()->with('diky_success', 'Penolakan Berhasil');
        }
    }

    public function terimaorder(Request $request, $id = null)

    {

        if ($request->isMethod('post')) {

            Transaction::where(['id' => $id])->update([

                'status' => "DIKEMAS",

            ]);

            return redirect()->back()->with('diky_success', 'Terima Order Berhasil');
        }
    }

    public function kirimorder(Request $request, $id = null)

    {
        if ($request->isMethod('post')) {

            $data = $request->all();

            Transaction::where(['id' => $id])->update([

                'shipping' => $data['shipping'],

                'no_resi' => $data['no_resi'],

                'status' => "DIKIRIM",

            ]);

            return redirect()->back()->with('diky_success', 'Kirim Berhasil');;
        }
    }

    public function transaksi()
    {

        $transaksi = DB::table('transaksi')->count();

        $title = 'Transaksi';

        return view('pages.transaksi', compact('transaksi'), ['dataproduk' => TransactionItem::all(), 'dataproduk2' => Product::all()])->with('title', $title);
    }

    public function dataservice()
    {

        $dataservice = DB::table('transaksi')->where('status', 'proses')->get();

        $dataproduk = DB::table('products')->get();

        $produkitem = DB::table('transaction_items')->get();

        $test = DB::table('transaksi')->where('status', 'done')->get();

        $title = 'Data Service';

        return view('pages.data_service', ['produkitem' => $produkitem, 'dataservice' => $dataservice, 'test' => $test, 'dataproduk' => $dataproduk, 'product' => TransactionItem::all()])->with('title', $title);
    }

    public function profil()
    {

        $dataadmin = DB::table('users')->where('roles', 'ADMIN')->get();

        $title = 'Profil';

        return view('pages.profil', ['dataadmin' => $dataadmin])->with('title', $title);
    }



    public function editprofil(Request $request, $id = null)

    {

        if ($request->isMethod('post')) {

            $data = $request->all();

            User::where(['id' => $id])->update([

                'fullname' => $data['fullname'],

                'roles' => $data['roles'],

                'phone_number' => $data['phone_number'],

                'alamat' => $data['alamat'],

                'kecamatan' => $data['kecamatan'],

                'kabupaten' => $data['kabupaten'],

                'kpos' => $data['kpos']

            ]);

            return redirect()->back()->with('diky_success', 'Update Berhasil');;
        }
    }

    public function edit(Request $request, $id = null)

    {

        if ($request->isMethod('post')) {

            $data = $request->all();

            User::where(['id' => $id])->update([

                'fullname' => $data['name'],

                'email' => $data['email'],

                'phone_number' => $data['phone'],

                'pin_number' => $data['pin'],

                'password' => bcrypt($data['password']),

                //'kendaraan'=>$data['kendaraan']

            ]);

            return redirect()->back()->with('diky_success', 'Update Berhasil');
        }
    }

    public function hapus(Request $request, $id)

    {

        if ($request->isMethod('post')) {

            User::where(['id' => $id])->delete();

            return redirect()->back()->with('diky_hapus', 'Hapus Data Berhasil');
        }
    }

    public function editk(Request $request, $id = null)

    {

        if ($request->isMethod('post')) {

            $data = $request->all();

            User::where(['id' => $id])->update([

                'fullname' => $data['name'],

                'phone_number' => $data['phone'],

                'roles' => $data['status'],

                'alamat' => $data['alamat']

            ]);

            return redirect()->back()->with('diky_success', 'Update Berhasil');
        }
    }

    public function hapusk(Request $request, $id)

    {

        if ($request->isMethod('post')) {

            User::where(['id' => $id])->delete();

            return redirect()->back()->with('diky_hapus', 'Hapus Data Berhasil')->with('diky_hapus', 'Gagal');
        }
    }

    public function editp(Request $request, $id = null)

    {

        if ($request->isMethod('post')) {

            $data = $request->all();

            Product::where(['id' => $id])->update([

                'product_name' => $data['produk'],

                'price' => $data['harga'],

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

    { {



            $data = $request->validate([

                'transaction_id' => 'required|max:255',

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

                'notes',

            ]);

            DB::table('transaksi')->insert($data);

            return redirect()->back()->with('diky_success', 'Berhasil');
        }
    }

    public function bayardulu(Request $request, $id = null)

    {

        if ($request->isMethod('post')) {

            Transaksi::where(['id' => $id])->update([

                'status' => "done",

            ]);

            return redirect()->back()->with('diky_success', 'Pembayaran Berhasil');
        }
    }



    public function tambahproduk(Request $request, $id = null)

    {

        $bayar = $request->harga;

        $price = $request->price;

        $jumlah = $request->jumlah;

        $total = ($jumlah * $bayar) + $price; {

            DB::table('transaction_items')->insert([

                'product_id' => $request->idproduk,

                'product_name' => $request->produkname,

                'transaction_id' => $request->nota,

                'quantity' => "1",

            ]);

            DB::table('transaksi')->where(['id' => $id])->update([

                'price' => $total,

            ]);

            return redirect()->back()->with('diky_success', 'Produk Berhasil Ditambahkan');
        }
    }

    public function hapusp(Request $request, $id)

    {

        if ($request->isMethod('post')) {

            Product::where(['id' => $id])->delete();

            return redirect()->back()->with('diky_hapus', 'Hapus Data Berhasil');
        }
    }

    public function invoice($id)
    {
        $invoice = Transaksi::where('id', $id)->first();

        return view('pages.invoice', compact('invoice'));
    }



    public function terima(Request $request, $id = null)

    {

        if ($request->isMethod('post')) {

            $data = $request->all();

            CallMechanic::where(['id' => $id])->update([

                'mechanic' => $data['mechanic'],

                'status' => "perjalanan",

            ]);

            return redirect()->back()->with('diky_success', 'Pesanan DiTerima');
        }
    }

    public function selesai(Request $request, $id = null)

    {

        if ($request->isMethod('post')) {

            $data = $request->all();

            CallMechanic::where(['id' => $id])->update([

                'status' => "diselesaikan",

            ]);

            return redirect()->back()->with('diky_success', 'Pesanan Selesai');
        }
    }

    public function tolak(Request $request, $id = null)

    {

        if ($request->isMethod('post')) {

            CallMechanic::where(['id' => $id])->update([

                'status' => "ditolak",

            ]);

            return redirect()->back()->with('diky_success', 'Penolakan Berhasil');
        }
    }
}
