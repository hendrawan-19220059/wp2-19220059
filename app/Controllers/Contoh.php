<?php

namespace App\Controllers;

use App\Models\Model_Latihan1;


class Contoh extends BaseController
{
    protected $model_Latihan1;


    public function __construct()
    {
        $this->model_Latihan1 = new Model_Latihan1();   
    }


    public function index()
    {

        return view('latihan-1.php');

    }


    public function penjumlahan($n1, $n2){
    
        $hasil = $this->model_Latihan1->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari $n1 + $n2 = $hasil";
    }
}

