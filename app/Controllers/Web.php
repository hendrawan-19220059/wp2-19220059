<?php

namespace App\Controllers;

class Web extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Halaman Depan'
        ];

        // return view('templates/header', $data) . view('data/index') . view('templates/footer');
        return view('web/v_header', $data) . view('web/index') . view('web/v_footer');

    }
}
