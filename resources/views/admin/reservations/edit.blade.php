@extends('layouts.masterAdmin', ['title'=>'Reservations'])

@section('content_header')
      <h1>
        Mes réservations <small>Repport ou modification</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashaboard"></i>Home</a></li>
        <li><a href="{{ url('admin/mesReservations') }}"><i class="fa fa-save"></i>Réservations</a></li>
        <li class="active">Repporter ou modifier une réservation</li>
      </ol>
@endsection

@section('content')
	
	<a href="{{ route('mesReservations.index') }}">Retour vers mes réservations</a>
@endsection