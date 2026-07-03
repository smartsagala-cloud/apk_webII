@extends('layouts.app')

@section('title', 'Pendidikan')

@section('content')

<h2>Riwayat Pendidikan</h2>

<table border="1" cellpadding="10">

<tr>

<td>Kampus</td>

<td>{{ $kampus }}</td>

</tr>

<tr>

<td>Program Studi</td>

<td>{{ $prodi }}</td>

</tr>

</table>

@endsection