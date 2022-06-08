<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CallMechanic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CallMechanicController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');

        $userId = $request->input('user_id');
        $vehicleId = $request->input('vehicle_id');
        $locationId = $request->input('location_id');
        $productId = $request->input('product_id');

        if ($id) {
            $callMechanic = CallMechanic::with(['user', 'vehicle', 'location', 'product'])->find($id);

            if ($callMechanic)
                return ResponseFormatter::success(
                    $callMechanic,
                    'Data panggil mekanik berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Anda belum pernah memanggil mekanik',
                    404
                );
        }

        $callMechanic = CallMechanic::with(['user', 'vehicle', 'location', 'product'])->orderBy('id', 'desc');

        if ($userId) {
            $callMechanic->where('user_id', '=', $userId);
        }

        if ($vehicleId) {
            $callMechanic->where('vehicle_id', '=', $vehicleId);
        }

        if ($locationId) {
            $callMechanic->where('location_id', '=', $locationId);
        }

        if ($productId) {
            $callMechanic->where('product_id', '=', $productId);
        }

        return ResponseFormatter::success(
            $callMechanic->where('user_id', '=', Auth::user()->id)->paginate($limit),
            'Data list panggil mekanik berhasil diambil'
        );
    }

    public function showOrder(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');

        $mechanic = $request->input('mechanic');
        $userId = $request->input('user_id');
        $vehicleId = $request->input('vehicle_id');
        $locationId = $request->input('location_id');
        $productId = $request->input('product_id');

        if ($id) {
            $callMechanic = CallMechanic::with(['user', 'vehicle', 'location', 'product'])->find($id);

            if ($callMechanic)
                return ResponseFormatter::success(
                    $callMechanic,
                    'Data panggil mekanik berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Anda belum pernah memanggil mekanik',
                    404
                );
        }

        $callMechanic = CallMechanic::with(['user', 'vehicle', 'location', 'product'])->orderBy('id', 'desc');

        if ($mechanic) {
            $callMechanic->where('mechanic', '=', $mechanic);
        }

        if ($userId) {
            $callMechanic->where('user_id', '=', $userId);
        }

        if ($vehicleId) {
            $callMechanic->where('vehicle_id', '=', $vehicleId);
        }

        if ($locationId) {
            $callMechanic->where('location_id', '=', $locationId);
        }

        if ($productId) {
            $callMechanic->where('product_id', '=', $productId);
        }

        return ResponseFormatter::success(
            $callMechanic->paginate($limit),
            'Data list panggil mekanik berhasil diambil'
        );
    }

    public function callMechanic(Request $request)
    {
        $request->validate([
            'vehicle_id' => 'required',
            'location_id' => 'required',
            // 'product_id' => 'required',
            'type_of_work' => 'required',
            'payment_method' => 'required',
            'total_payment' => 'required',
            'status' => 'required',
        ]);

        $call = CallMechanic::create([
            'user_id' => Auth::user()->id,
            'mechanic' => "Admin",
            'vehicle_id' => $request->vehicle_id,
            'location_id' => $request->location_id,
            'product_id' => $request->product_id,
            'type_of_work' => $request->type_of_work,
            'detail_problem' => $request->detail_problem,
            'payment_method' => $request->payment_method,
            'total_payment' => $request->total_payment,
            'status' => $request->status
        ]);

        return ResponseFormatter::success([
            $call
        ], 'Mekanik ditemukan');
    }
}
