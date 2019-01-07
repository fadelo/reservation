@extends('layouts.masterClient', ['title'=>'Reservations'])

@section('content_header')
      <h1>
        Nouvelle réservation
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('ClientHome') }}"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Réservation</li>
      </ol>
@endsection

@section('content')
	
	<a href="{{ route('reservations.index') }}">Retour vers mes réservations</a>
@endsection