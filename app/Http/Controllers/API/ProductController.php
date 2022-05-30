<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $productName = $request->input('product_name');
        $productCategory = $request->input('product_category');

        if ($id) {
            $product = Product::with(['galleries'])->find($id);

            if ($product)
                return ResponseFormatter::success(
                    $product,
                    'Data produk berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data produk tidak ada',
                    404
                );
        }

        $product = Product::with(['galleries'])->orderBy('id', 'desc');

        if ($productName) {
            $product->where('product_name', 'like', '%' . $productName . '%');
        }

        if ($productCategory) {
            $product->where('product_category', '=', $productCategory);
        }

        return ResponseFormatter::success(
            $product->paginate($limit),
            'Data list produk berhasil diambil'
        );
    }
}
