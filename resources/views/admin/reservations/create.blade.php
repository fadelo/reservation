@extends('layouts.masterAdmin', ['title'=>'Reservations'])

@section('content_header')
      <h1>
        Mes réservations 
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashaboard"></i>Home</a></li>
        <li><a href="{{ url('admin/mesReservations') }}"><i class="fa fa-save"></i>Réservations</a></li>
        <li class="active">Toutes mes réservations</li>
      </ol>
@endsection