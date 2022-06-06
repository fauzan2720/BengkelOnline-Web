<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionsController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $status = $request->input('status');

        if ($id) {
            $transaction = Transaction::with(['user', 'location', 'items'])->find($id);

            if ($transaction)
                return ResponseFormatter::success(
                    $transaction,
                    'Data transaksi berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data transaksi tidak ada',
                    404
                );
        }

        $transaction = Transaction::with(['user', 'location', 'items']);

        if ($status) {
            $transaction->where('status', $status);
        }

        return ResponseFormatter::success(
            $transaction->paginate($limit),
            'Data list transaksi berhasil diambil'
        );
    }

    public function checkout(Request $request)
    {
        try {
            $request->validate([
                'items' => 'required|array',
                'items.*.id' => 'exists:products,id',
                'location_id' => 'required',
                'total' => 'required',
                'shipping_price' => 'required',
                'total_payment' => 'required',
                'status' => 'required|in:PENDING,SUCCESS,CANCELLED,FAILED,SHIPPING,SHIPPED',
            ]);

            $transaction = Transaction::create([
                'user_id' => Auth::user()->id,
                'location_id' => $request->location_id,
                'total' => $request->total,
                'shipping_price' => $request->shipping_price,
                'total_payment' => $request->total_payment,
                'status' => $request->status
            ]);

            foreach ($request->items as $product) {
                TransactionItem::create([
                    'product_id' => $product['id'],
                    'transaction_id' => $transaction->id,
                    'quantity' => $product['quantity']
                ]);
            }

            return ResponseFormatter::success($transaction->load('items.product'), 'Transaksi berhasil');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 'Authentication Failed', 500);
        }
    }
}
