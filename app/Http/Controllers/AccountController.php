<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\OperationalOffice;

class AccountController extends Controller
{
    // Menampilkan semua akun
    public function index()
    {
        $accounts = User::all();  // Mengambil semua akun dari tabel users
        return view('accountofficer.adminsuper.manage_Account', compact('accounts'));  // Mengirim data akun ke view
    }

    // Menampilkan form untuk menambah akun
    public function create()
    {
        $offices = OperationalOffice::all(); // Ambil semua kantor dari koleksi MongoDB
    return view('accountofficer.adminsuper.add_account', compact('offices')); 
    }

    // Menyimpan akun baru
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'role' => 'required|string',
            'officeCode' => 'required|string',
        ]);

        // Membuat akun baru
        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),  // Enkripsi password
            'role' => $request->role,
            'officeCode' => $request->officeCode,
        ]);

        // Redirect ke halaman manage-accounts setelah sukses
        return redirect()->route('manage-accounts')->with('success', 'Akun berhasil ditambahkan!');
    }

    // Menampilkan form untuk edit akun
    public function edit($id)
    {
        $account = User::findOrFail($id);  // Menemukan akun berdasarkan ID
        return view('accountofficer.adminsuper.edit_account', compact('account'));  // Mengirim data akun ke form edit
    }

    // Memperbarui akun yang telah diubah
    public function update(Request $request, $id)
    {
        $account = User::findOrFail($id);  // Menemukan akun berdasarkan ID

        // Validasi data
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'nullable|string|min:8',
            'role' => 'required|string',
            'officeCode' => 'required|string',
        ]);

        // Update data akun
        $account->update([
            'username' => $request->username,
            'password' => $request->password ? bcrypt($request->password) : $account->password,  // Jika password diubah, maka di-enkripsi
            'role' => $request->role,
            'officeCode' => $request->officeCode,
        ]);

        // Redirect ke halaman manage-accounts setelah sukses
        return redirect()->route('manage-accounts')->with('success', 'Akun berhasil diperbarui!');
    }

    // Menghapus akun
    public function destroy($id)
    {
        $account = User::findOrFail($id);  // Menemukan akun berdasarkan ID
        $account->delete();  // Menghapus akun

        // Redirect ke halaman manage-accounts setelah sukses
        return redirect()->route('manage-accounts')->with('success', 'Akun berhasil dihapus!');
    }
}
