<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class PageController extends BaseController
{
    public function home()
    {
        $profileModel = new ProfileModel();
        $data['profiles'] = $profileModel->findAll();
        return view('home', $data);
    }

    public function about()
    {
        return view('about');
    }
}