<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use App\Models\Check;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        Auth::attempt($request->only('email', 'password'));

        if (Auth::check()) {
            $token = Auth::user()->createToken('Token')->plainTextToken;

            return response()->json([
                'success' => true,
                'data' => Auth::user(),
                'token' => $token,
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Unauthorized'
        ]);
    }
    public function logout(Request $request)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 401);
        }

        $user->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logout successfully'
        ], 200);
    }
}
