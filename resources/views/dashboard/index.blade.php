@extends('layouts.dashboard.app')

@section('content')
    <h1>Selamat Datang, <b>{{ Auth::user()->name }}</b></h1>
@endsection
