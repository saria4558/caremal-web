<?php

namespace App\Http\Controllers; // Namespace yang benar

use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller; // Tambahkan ini agar Controller dikenali

class RegisterController extends Controller
{
    // Menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('register');
    }

    // Menangani data dari form pertama (data pribadi)
    public function handleFirstForm(Request $request)
    {
        // Validasi input form pertama
        $request->validate([
            'masy_nama' => 'required|string|max:255',
            'masy_JK' => 'required|in:male,female',
            'masy_Ttl' => 'required|date',
            'masy_email' => 'required|email|unique:masyarakats,masy_email',
            'masy_Telepon' => 'required|string|max:15|unique:masyarakats,masy_Telepon',
        ]);

        // Simpan data sementara ke session
        $request->session()->put('registration_data', $request->only([
            'masy_nama', 'masy_JK', 'masy_Ttl', 'masy_email', 'masy_Telepon', 'nip'
        ]));

        // Redirect ke form kedua untuk melengkapi registrasi
        return redirect()->route('register.complete');
    }

    // Menangani data dari form kedua (username dan password)
    public function handleSecondForm(Request $request)
    { 
        // Validasi input dari form kedua
        $request->validate([
            'masy_username' => 'required|string|max:255|unique:masyarakats,masy_username',
            'masy_password' => 'required|string|min:8|confirmed',
        ]);

        // Ambil data dari session
        $registrationData = $request->session()->get('registration_data');

        if (!$registrationData) {
            // Jika data session tidak ditemukan, redirect kembali ke halaman pertama
            return redirect()->route('register')->withErrors('Silakan isi form pertama terlebih dahulu.');
        }
        
        // Cek apakah input NIP diisi
        if ($registrationData['nip'] != null) {
            // Simpan data ke database
                Masyarakat::create([
                    'masy_NIK' => $registrationData['nip'],
                    'masy_nama' => $registrationData['masy_nama'],
                    'masy_JK' => $registrationData['masy_JK'],
                    'masy_Ttl' => $registrationData['masy_Ttl'],
                    'masy_email' => $registrationData['masy_email'],
                    'masy_Telepon' => $registrationData['masy_Telepon'],
                    'masy_username' => $request->masy_username,
                    'masy_password' => Hash::make($request->masy_password),
                    'masy_kPassword' => Hash::make($request->masy_password_confirmation),
                ]);

                // Hapus data dari session setelah selesai registrasi
                $request->session()->forget('registration_data');

                // Redirect ke halaman login dengan pesan sukses
                return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login.');
            }

        // Simpan data ke database
        Masyarakat::create([
            'masy_nama' => $registrationData['masy_nama'],
            'masy_JK' => $registrationData['masy_JK'],
            'masy_Ttl' => $registrationData['masy_Ttl'],
            'masy_email' => $registrationData['masy_email'],
            'masy_Telepon' => $registrationData['masy_Telepon'],
            'masy_username' => $request->masy_username,
            'masy_password' => Hash::make($request->masy_password),
            'masy_kPassword' => Hash::make($request->masy_password_confirmation),
        ]);

        // Hapus data dari session setelah selesai registrasi
        $request->session()->forget('registration_data');

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login.');
    }
}
