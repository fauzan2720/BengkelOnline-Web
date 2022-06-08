<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');

        $location = Location::with(['user', 'callMechanics'])->orderBy('updated_at', 'desc');

        if ($id) {
            $location->where('id', '=', $id);
        }

        return ResponseFormatter::success(
            $location->where('user_id', '=', Auth::user()->id)->paginate($limit),
            'Data list lokasi user berhasil diambil'
        );
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'address' => ['required', 'string', 'max:100'],
                'detail_address' => ['required', 'string', 'max:255'],
            ]);

            $createLocation = Location::create([
                'user_id' => Auth::user()->id,
                'address' => $request->address,
                'detail_address' => $request->detail_address,
            ]);

            return ResponseFormatter::success([
                $createLocation,
            ], 'Lokasi user berhasil ditambahkan');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 'Authentication Failed', 500);
        }
    }

    public function update(Request $request, Location $location)
    {
        $request->validate([
            'address' => ['required', 'string', 'max:100'],
            'detail_address' => ['required', 'string', 'max:255'],
        ]);

        $updateLocation = Location::findOrFail($location->id);

        if ($updateLocation) {

            $updateLocation->update([
                'user_id' => Auth::user()->id,
                'address' => $request->address,
                'detail_address' => $request->detail_address,
            ]);

            return ResponseFormatter::success($updateLocation, 'Kendaraan berhasil diperbarui');
        }

        return ResponseFormatter::error([
            'message' => 'Kendaraan gagal diperbarui',
        ], 'Authentication Failed', 404);
    }

    public function destroy($id)
    {
        $delete = Location::findOrfail($id);

        if ($delete) {

            $delete->delete();

            return ResponseFormatter::success([
                $delete,
            ], 'Alamat berhasil dihapus');
        }

        return ResponseFormatter::error([
            'message' => 'Alamat gagal dihapus',
        ], 'Authentication Failed', 404);
    }
}
