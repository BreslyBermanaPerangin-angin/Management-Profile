<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Dashboard extends BaseController
{
    public function dashboard()
    {
        // Cek apakah sudah login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }

        $email = session()->get('email');
        $db = \Config\Database::connect();
        $user_builder = $db->table('users');
        $user = $user_builder->where('email', $email)->get()->getRow();

        // Menggunakan model untuk menghitung jumlah profil (lebih clean)
        $profileModel = new ProfileModel();
        $profiles_count = $profileModel->countAll();
        session()->set('profiles_count', $profiles_count);

        $data = [
            'name' => $user ? $user->name : '',
            'profiles_count' => $profiles_count,
        ];

        // Tampilkan halaman dashboard admin
        return view('dashboard/index', $data);
    }
}