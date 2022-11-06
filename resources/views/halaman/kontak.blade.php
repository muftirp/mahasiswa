@extends('layout.aplikasi')
@section('konten')
<h1> INI HALAMAN KONTAK DAN DENGAN NOMOR {{$nomor}}<br>
DENGAN ALAMAT DI {{$alamat}}
<ul style="list-style-type:none">
    <li>alamat IG :{{$sosial['ig']}}</li>
    <li>alamat Youtube : {{$sosial['youtube']}}</li>
</ul>
</h1>
<a href={{url('/')}}>back to home</a>
@endsection
