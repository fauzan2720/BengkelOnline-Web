<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $vehicleName = $request->input('vehicle_name');
        $numberPlate = $request->input('number_plate');

        $vehicle = Vehicle::with(['user', 'callMechanics'])->orderBy('updated_at', 'desc');

        if ($id) {
            $vehicle->where('id', '=', $id);
        }

        if ($vehicleName) {
            $vehicle->where('vehicle_name', 'like', '%' . $vehicleName . '%');
        }

        if ($numberPlate) {
            $vehicle->where('number_plate', 'like', '%' . $numberPlate . '%');
        }

        return ResponseFormatter::success(
            $vehicle->where('user_id', '=', Auth::user()->id)->paginate($limit),
            'Data list kendaraan berhasil diambil'
        );
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'vehicle_name' => ['required', 'string', 'max:100'],
                'number_plate' => ['required', 'string', 'min:6', 'max:11'],
            ]);

            Vehicle::create([
                'user_id' => Auth::user()->id,
                'vehicle_name' => $request->vehicle_name,
                'number_plate' => $request->number_plate,
                'photo_url' => $request->photo_url,
            ]);

            $create = Vehicle::where('number_plate', $request->number_plate)->first();

            return ResponseFormatter::success([
                $create,
            ], 'Kendaraan berhasil ditambahkan');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 'Authentication Failed', 500);
        }
    }

    public function show($id)
    {
        //find post by ID
        $post = Vehicle::findOrfail($id);

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Post',
            'data'    => $post
        ], 200);
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'vehicle_name' => ['required', 'string', 'max:100'],
            'number_plate' => ['required', 'string', 'min:6', 'max:10'],
        ]);

        $updateVehicle = Vehicle::findOrFail($vehicle->id);

        if ($updateVehicle) {

            $updateVehicle->update([
                'user_id' => Auth::user()->id,
                'vehicle_name' => $request->vehicle_name,
                'number_plate' => $request->number_plate,
                'photo_url' => $request->photo_url

            ]);

            return ResponseFormatter::success($updateVehicle, 'Kendaraan berhasil diperbarui');
        }

        return ResponseFormatter::error([
            'message' => 'Kendaraan gagal diperbarui',
        ], 'Authentication Failed', 404);
    }

    public function destroy($id)
    {
        $delete = Vehicle::findOrfail($id);

        if ($delete) {

            $delete->delete();

            return ResponseFormatter::success([
                $delete,
            ], 'Kendaraan berhasil dihapus');
        }

        return ResponseFormatter::error([
            'message' => 'Kendaraan gagal dihapus',
        ], 'Authentication Failed', 404);
    }
}
