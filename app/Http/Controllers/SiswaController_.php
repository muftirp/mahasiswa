<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        // $data = siswa::all();
        $data = siswa::orderBy('nomor_induk','desc')->paginate(1);
        return view('siswa.index')->with('siswa',$data);
    }

    public function detail($id)
    {
        // $data = siswa::where('nomor_induk',$id)->first();
        // return view('siswa.show')->with('siswa',$data);
// return '<h1>DETAIL HALAMAN dari controller dengan id $id</h1>';
         $data = siswa::where('nomor_induk' , $id) ->first();
         return view('siswa.show')->with('siswa',$data);
    }

    public function create()
    {
        
    }
}
