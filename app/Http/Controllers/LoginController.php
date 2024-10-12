<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'masy_Telepon' => 'required',
            'masy_password' => 'required|string',
        ]);

        
        // Cek apakah user ada di database
        $user = Masyarakat::where('masy_Telepon', $request->masy_Telepon)->first();
        if ($user && Hash::check($request->masy_password, $user->masy_password)) {
            Auth::login($user);
            return redirect()->to('/admin/daftarkontak')->with('success', 'Login berhasil!');
        } 
       

        return back()->withErrors(['masy_username' => 'Username atau password salah'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logout berhasil!');
    }
}
