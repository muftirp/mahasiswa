<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index(){
        
        return view('halaman.index');
    }

    public function kontak(){
        $data = [
            'nomor' => '0894589438598345',
            'alamat' => 'indonesia',
            'sosial' => [
                    'ig' => '@muftiem',
                    'youtube' => '@mmmuftiem'
            ]
        ];
        return view('halaman.kontak')->with($data);
    }

    public function tentang(){
        $data = "adalah halaman tentang yang asli";
        return view('halaman.tentang')->with('halaman_tentang',$data);
    }
}
