@extends('layouts.mainlayout')


@section('container')
    <h2>{{ $name }}</h1>
        <h4>{{ $email }}</h4>
        <img src="img/{{ $image }}" alt=""class='img-thumbnail rounded-circle'>
    @endsection
