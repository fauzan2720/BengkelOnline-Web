<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Transaksi;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class CheckoutController extends Controller
{
    public function bayar(Request $request, $id=null, $id_produk)
	{
		$produk = Product::product($id_produk);
        $cart['id_produk'] = [
            'product_name'=>$produk->product_name,
            'price'=>$produk->price,

        ];
	}
    
}