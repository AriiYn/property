<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    // Tampilkan semua data user
    public function pengguna()
    {
        $users = User::all();
        return view('admin.user.pengguna', compact('users'));
    }

    // Tampilkan form untuk membuat user baru
    public function create()
    {
        return view('admin.user.create');
    }

    // Simpan user baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.pengguna')->with('success', 'User berhasil ditambahkan');
    }

    // Tampilkan form untuk edit user
    public function edit($id)
    {   
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    // Update data user
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6'
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        // Logout pengguna setelah berhasil mengubah password
        Auth::logout();

        // Redirect ke halaman login dengan pesan sukses
        return redirect('login')->with('success', 'User berhasil diupdate. Silakan login kembali.');
    }

    // Hapus user
    public function destroy($id)
    {
        $user = User::findOrFail($id);  // Mengambil user berdasarkan id
        $user->delete();  // Menghapus user

        return redirect()->route('admin.pengguna')->with('success', 'User berhasil dihapus');
    }

}
