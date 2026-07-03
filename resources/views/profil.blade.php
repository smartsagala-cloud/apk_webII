@extends('layouts.app')

@section('title', 'Profil')

@section('content')

<h2>Profil Mahasiswa</h2>

<table border="1" cellpadding="10">

<tr>
    <td>Nama</td>
    <td>{{ $nama }}</td>
</tr>

<tr>
    <td>NPM</td>
    <td>{{ $npm }}</td>
</tr>

</table>

@endsection