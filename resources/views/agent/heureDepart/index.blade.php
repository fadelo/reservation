@extends('layouts/masterAgent', ['title'=>'Trajets'])

@section('content_header')
      <h1>
        Gestion des trajets <small>Heures de départ</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('AgentHome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{ url('agent/trajets') }}"><i class="fa fa-exchange"></i>Trajets</a></li>
        <li class="active">Heures de départ</li>
      </ol>
@endsection