<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\tb_Admin;
use App\Models\tb_dokter;
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
            'masy_Telepon' => 'required|string',
            'masy_password' => 'required|string',
        ]);

        $telepon = $request->input('masy_Telepon');
        $password = $request->input('masy_password');

        // Cek di tabel Admin
        $user = User::where('telepon', $telepon)->first();
        if ($user && Hash::check($password, $user->password)) {
            Auth::login($user);
            $request->session()->put('name', $user->name);
            return redirect()->to('/admin/artikel')->with('success', 'Login berhasil sebagai Admin!');
        }

        // Cek di tabel Dokter
        $user = tb_dokter::where('telepon', $telepon)->first();
        if ($user && Hash::check($password, $user->password)) {
            Auth::login($user);
            $request->session()->put('dokter_nama', $user->dokter_nama); 
            return redirect()->to('/dokter/home')->with('success', 'Login berhasil sebagai Dokter!');
        }

        // Cek di tabel Masyarakat
        $user = Masyarakat::where('masy_Telepon', $telepon)->first();
        if ($user && Hash::check($password, $user->masy_password)) {
            Auth::login($user);
            $request->session()->put('masy_nama', $user->masy_nama);
            return redirect()->to('/masyarakat/artikel')->with('success', 'Login berhasil sebagai Masyarakat!');
        }

        return back()->withErrors(['masy_username' => 'Telepon atau password salah'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logout berhasil!');
    }
}
