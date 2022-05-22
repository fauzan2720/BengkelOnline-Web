<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $vehicleName = $request->input('vehicle_name');
        $numberPlate = $request->input('number_plate');

        if ($id) {
            $product = Vehicle::with(['user', 'callMechanics'])->find($id);

            if ($product)
                return ResponseFormatter::success(
                    $product,
                    'Data kendaraan berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data kendaraan tidak ada',
                    404
                );
        }

        $product = Vehicle::with(['user', 'callMechanics'])->orderBy('id', 'desc');

        if ($vehicleName) {
            $product->where('vehicle_name', 'like', '%' . $vehicleName . '%');
        }

        if ($numberPlate) {
            $product->where('number_plate', 'like', '%' . $numberPlate . '%');
        }

        return ResponseFormatter::success(
            $product->paginate($limit),
            'Data list kendaraan berhasil diambil'
        );
    }

    public function createVehicle(Request $request)
    {
        try {
            $request->validate([
                'vehicle_name' => ['required', 'string', 'max:100'],
                'number_plate' => ['required', 'string', 'min:6', 'max:10', 'unique:vehicles,number_plate'],
            ]);

            Vehicle::create([
                'user_id' => Auth::user()->id,
                'vehicle_name' => $request->vehicle_name,
                'number_plate' => $request->number_plate,
                'photo_url' => $request->photo_url,
            ]);

            $createVehicle = Vehicle::where('number_plate', $request->number_plate)->first();

            return ResponseFormatter::success([
                $createVehicle,
            ], 'Kendaraan berhasil ditambahkan');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 'Authentication Failed', 500);
        }
    }
}
