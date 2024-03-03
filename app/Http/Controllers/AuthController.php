<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = [
            'telephone' => $request->telephone,
            'password' => $request->password,
        ];

        if (Auth::guard('web')->attempt($credentials)) {
            $user = Auth::guard('web')->user();
            $user->api_token = Str::random(60);

            $user->save();

            return redirect("http://127.0.0.1:8000/register");
        }

        return response()->json(['message' => 'Something went wrong'], 401);

    }
    public function logout(Request $request)
    {
        $user = Auth::guard('web')->user();
        $user->api_token = null;
        $user->save();

        return redirect("http://127.0.0.1:8000/");
    }
}
