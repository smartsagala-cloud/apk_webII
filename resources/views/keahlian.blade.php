@extends('layouts.app')

@section('title', 'Keahlian')

@section('content')

<h2>Keahlian</h2>

<ul>

@foreach($skills as $skill)

<li>{{ $skill }}</li>

@endforeach

</ul>

@endsection