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

@section('content')
	<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">        <!-- ./col -->
        
        <div class="col-md-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $reserv }}</h3>
              <p>Mes réservations</p>
            </div>
            <div class="icon">
              <i class="fa fa-save"></i>
            </div>
            <a href="{{ route('mes_reservations.index') }}" class="small-box-footer">Voir détails<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>{{ $trajet }}</h3>
              <p>Trajets</p>
            </div>
            <div class="icon">
              <i class="fa fa-exchange"></i>
            </div>
            <a href="{{ route('clientTrajet') }}" class="small-box-footer">Voir détails<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $compagnie }}</h3>
              <p>Compagnies</p>
            </div>
            <div class="icon">
              <i class="fa fa-bus"></i>
            </div>
            <a href="{{ route('clientComp') }}" class="small-box-footer">Voir détails<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

  </section>
@endsection