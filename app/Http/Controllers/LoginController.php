<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
{
    // Cek apakah pengguna sudah login
    if (Auth::check()) {
        $user = Auth::user(); // Ambil user yang sudah login

        // Redirect berdasarkan role
        switch ($user->role) {
            case 'adminsuper':
                return redirect()->route('adminsuper.index'); // Arahkan ke halaman adminsuper
            case 'csbl':
                return redirect()->route('cs.dashboard'); // Arahkan ke halaman CS
            case 'helpdeskbl':
                return redirect()->route('helpdesk.dashboard'); // Arahkan ke halaman helpdesk
            case 'tellerbl':
                return redirect()->route('teller.dashboard'); // Arahkan ke halaman teller
            default:
                return redirect()->route('login')->withErrors(['login_error' => 'Role tidak dikenali']);
        }
    }

    return view('accountofficer.login');
}



public function login(Request $request)
{
    // Cek apakah pengguna sudah login
    if (Auth::check()) {
        $user = Auth::user(); // Ambil user yang sudah login

        // Redirect berdasarkan role jika sudah login
        switch ($user->role) {
            case 'adminsuper':
                return redirect()->route('adminsuper.index');
            case 'csbl':
                return redirect()->route('cs.dashboard');
            case 'helpdeskbl':
                return redirect()->route('helpdesk.dashboard');
            case 'tellerbl':
                return redirect()->route('teller.dashboard');
            default:
                return redirect()->route('login')->withErrors(['login_error' => 'Role tidak dikenali']);
        }
    }

    // Log input request
    \Log::info($request->all());

    // Validasi input
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    // Cari user berdasarkan username
    $user = User::where('username', $request->username)->first();

    // Periksa apakah user ditemukan dan validasi password
    if ($user && preg_match('/(\d{3})/', $request->password, $matches)) {
        $officeCode = $matches[1]; // Ambil kode kantor dari password

        // Login user
        Auth::login($user);

        // Simpan officeCode di session
        session(['officeCode' => $officeCode]);

        // Redirect berdasarkan role
        switch ($user->role) {
            case 'adminsuper':
                return redirect()->route('adminsuper.index');
            case 'csbl':
                return redirect()->route('cs.dashboard');
            case 'helpdeskbl':
                return redirect()->route('helpdesk.dashboard');
            case 'tellerbl':
                return redirect()->route('teller.dashboard');
            default:
                return redirect()->route('login')->withErrors(['login_error' => 'Role tidak dikenali']);
        }
    }

    // Jika username atau password salah
    return back()->withErrors(['login_error' => 'Username atau password salah']);
}


    
    public function updatePassword(Request $request)
    {
        $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required|min:6',
            'confirmPassword' => 'required|same:new_password',
        ]);

        $user = Auth::user();

        // Periksa apakah password lama benar
        if (!Hash::check($request->oldPassword, $user->password)) {
            return back()->withErrors(['oldPassword' => 'Password lama salah']);
        }

        // Update password baru
        $user->password = Hash::make($request->newPassword);
        $user->save();

        return back()->with('success', 'Password berhasil diubah!');
    }

    public function updatePhoto(Request $request)
    {
        $request->validate([
            'profileImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $user = Auth::user();
    
        // Hapus foto lama jika ada
        if ($user->profileImage && file_exists(public_path($user->profileImage))) {
            unlink(public_path($user->profileImage));
        }
    
        // Simpan gambar ke storage dengan nama unik
        $filename = time() . '.' . $request->profileImage->extension();
        $path = $request->profileImage->storeAs('profileImages', $filename, 'public');
    
        // Simpan path gambar baru ke database
        $user->profileImage = "/storage/$path";
        $user->save();
    
        return response()->json(['success' => true, 'profileImage' => asset("storage/$path")]);
    }    

    // Controller Logout
public function logout(Request $request)
{
    // Log out the user
    auth()->logout();

    // Invalidate the session
    $request->session()->invalidate();

    // Regenerate the session token to prevent reuse
    $request->session()->regenerateToken();

    // Redirect ke halaman login
    return redirect()->route('login');
}

    
}
