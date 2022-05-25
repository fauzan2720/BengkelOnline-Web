<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');

        if ($id) {
            $product = Location::with(['user', 'callMechanics'])->find($id);

            if ($product)
                return ResponseFormatter::success(
                    $product,
                    'Data lokasi user berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data lokasi user tidak ada',
                    404
                );
        }

        $product = Location::with(['user', 'callMechanics'])->orderBy('id', 'desc');

        return ResponseFormatter::success(
            $product->paginate($limit),
            'Data list lokasi user berhasil diambil'
        );
    }

    public function createLocation(Request $request)
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
}
