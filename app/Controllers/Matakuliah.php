<?php

namespace App\Controllers;

class Matakuliah extends BaseController
{

    public function index()
    {
        return view('view-form-matakuliah');
    }
    
    
    public function cetak(){
        $data = [
            'kode_mtk' => $this->request->getPost('kode_mtk'),
            'nama_mtk' => $this->request->getPost('nama_mtk'),
            'sks' => $this->request->getPost('sks')
        ];
        
        
        return view('view-data-matakuliah', $data);
    }
}
