<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Rules\Password;

class UserController extends Controller
{
    public function fetch(Request $request)
    {
        return ResponseFormatter::success($request->user(), 'Data profil user berhasil diambil');
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);

            $credentials = request(['email', 'password']);
            if (!Auth::attempt($credentials)) {
                return ResponseFormatter::error([
                    'message' => 'Unauthorized'
                ], 'Authentication Failed', 500);
            }

            $user = User::where('email', $request->email)->first();
            if (!Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Invalid Credentials');
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'Authenticated');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 'Authentication Failed', 500);
        }
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'fullname' => ['required', 'string', 'max:100'],
                'email' => ['required', 'string', 'email', 'max:100', 'unique:users,email'],
                'phone_number' => ['required', 'string', 'min:11', 'max:13', 'unique:users,phone_number'],
                // 'pin_number' => ['string', 'min:6', 'max:6'],
                'password' => ['required', 'string', new Password],
            ]);

            User::create([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'pin_number' => $request->pin_number,
                'password' => Hash::make($request->password),
                'roles' => 'USER',
            ]);

            $user = User::where('email', $request->email)->first();
            // $user = User::where('phone_number', $request->phone_number)->first();

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'User Registered');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 'Authentication Failed', 500);
        }
    }

    public function logout(Request $request)
    {
        $token = $request->user()->currentAccessToken()->delete();

        return ResponseFormatter::success($token, 'Token Revoked');
    }

    public function updateProfile(Request $request)
    {
        $data = $request->validate([
            'fullname' => ['required', 'string', 'max:100'],
            'email' => ['string', 'email', 'max:100', 'unique:users,email'],
            'phone_number' => ['required', 'string', 'min:11', 'max:13'],
            // 'pin_number' => ['required', 'string', 'min:6', 'max:6'],
            'roles' => ['string', 'in:USER,ADMIN,KARYAWAN'],
        ]);

        $user = Auth::user();
        $user->update($data);

        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return ResponseFormatter::success([
            'access_token' => $tokenResult,
            'token_type' => 'Bearer',
            'user' => $user
        ], 'Profile Updated');
    }

    public function updatePassword(Request $request)
    {
        $data = $request->validate([
            'password' => ['string', new Password],
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = Auth::user();
        $user->update($data);

        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return ResponseFormatter::success([
            'access_token' => $tokenResult,
            'token_type' => 'Bearer',
            'user' => $user
        ], 'Profile Updated');
    }
}
