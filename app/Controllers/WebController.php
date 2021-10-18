<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class WebController extends BaseController
{
    public function index()
    {
        return view('beranda');
    }

    public function kontak()
    {
        return view('view_kontak');
    }

    public function gallery()
    {
        return view('view_gallery');
    }
}
