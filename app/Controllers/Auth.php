<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }
    public function doLogin()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        if ($user) {
            if ($user && password_verify($password, $user['password'])) {
                $session->set([
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'isLoggedIn' => true
                ]);
                // Setelah login berhasil
                session()->set('logged_in', true);
                session()->set('email', $user['email']);
                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('error', 'Password Salah');
            }
        } else {
            return redirect()->back()->with('error', 'Email Tidak Ditemukan');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
