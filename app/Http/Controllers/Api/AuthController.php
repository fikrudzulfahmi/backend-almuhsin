<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // 1. Validasi input yang dikirim dari frontend/Postman
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // 2. Cek apakah email dan password cocok
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'success' => false,
                'message' => 'Email atau Password salah',
            ], 401);
        }

        // 3. Jika cocok, ambil data user & buatkan Token baru (Sanctum)
        $user = User::where('email', $request->email)->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;

        // 4. Kirim respon sukses ke frontend
        return response()->json([
            'success' => true,
            'message' => 'Login Berhasil',
            'data' => [
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ],
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]
        ], 200);
    }

    // Kita buat sekalian fitur Logout agar rekap endpoint-nya lengkap untuk temanmu
    public function logout(Request $request)
    {
        // Hapus token yang sedang digunakan saat ini dari database
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logout Berhasil'
        ]);
    }
}
