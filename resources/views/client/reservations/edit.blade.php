@extends('layouts.masterClient', ['title'=>'Reservations'])

@section('content_header')
      <h1>
        Mes réservations <small>Repport ou modification</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('ClientHome') }}"><i class="fa fa-dashaboard"></i>Home</a></li>
        <li><a href="{{ url('client/reservations') }}"><i class="fa fa-save"></i>Réservations</a></li>
        <li class="active">Repporter ou modifier une réservation</li>
      </ol>
@endsection

@section('content')
	
	<a href="{{ route('mes_reservations.index') }}">Retour vers mes réservations</a>
@endsection