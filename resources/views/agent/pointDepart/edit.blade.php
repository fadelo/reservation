@extends('layouts/masterAgent', ['title'=>'Trajets'])

@section('content_header')
      <h1>
        Gestion des trajets <small>Modifier un arrêt de bus</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('AgentHome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{ url('agent/trajets') }}"><i class="fa fa-exchange"></i>Trajets</a></li>
        <li class="active">Modifier un arrêt de bus</li>
      </ol>
@endsection