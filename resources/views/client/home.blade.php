@extends('layouts.masterClient', ['title'=>'Home'])

@section('content_header')
      <h1>
        Tableau de bord
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('ClientHome') }}"><i class="fa fa-dashabord"></i>Home</a></li>
        <li class="active">Tableau de bord</li>
      </ol>
@endsection