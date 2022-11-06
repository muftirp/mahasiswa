@extends('layout.aplikasi')

@section('konten')

<div>
    <a href="/siswa" class='btn btn-secondary'><< Kembali</a>
    <h1>{{$siswa->nama}}</h1>
    <p>
        <b>Nomor Induk:</b> {{$siswa->nomor_induk}}
    </p>
    <p>
        <b>Alamat:</b> {{$siswa->alamat}}
    </p>
</div>
@endsection