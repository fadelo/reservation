@extends('layouts.masterClient', ['title'=>'Reservations'])

@section('content_header')
      <h1>
        Mes réservations <small>Nouvelle réservation</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('ClientHome') }}"><i class="fa fa-dashaboard"></i>Home</a></li>
        <li><a href="{{ url('client/reservations') }}"><i class="fa fa-save"></i>Réservations</a></li>
        <li class="active">Nouvelle réservation</li>
      </ol>
@endsection

@section('content')
	
	<a href="{{ url('client/reservations') }}">Retour vers mes réservations</a>
@endsection