@extends('layouts.masterClient', ['title'=>'Trajets'])

@section('content_header')
      <h1>
        Trajets disponibles
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('ClientHome') }}"><i class="fa fa-dashabord"></i>Home</a></li>
        <li class="active">Trajets</li>
      </ol>
@endsection

@section('content')
	<div class="row" style="margin-top: 5px;">
	    <div class="col-md-4 col-xs-12">
	        <a href="{{ route('compagnies.create') }}" class="btn btn-primary btn-block">  Reserverz plutôt directement</a>
	    </div>
	    <div class="col-md-4 col-xs-12" style="margin-top: 10px;">
	        
	    </div>
	    <div class="col-md-4 col-xs-12">
	        <div class="form-group input-group">
	               <input type="text" class="form-control" placeholder="zone de recherche">
	                <span class="input-group-btn">
	                    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
	                </span>
	          </div>
	    </div>
	 </div>
	@for ($i = 0; $i < $nb; $i++)
	<form action="{{ route('mes_reservations.create') }}">	
		<div class="box">
			<div class="box-header">
				<div class="col-md-4 col-xs-4">
					<h1 class="box-title">{{ $villeDpt[$i] }} - {{ $villeArr[$i] }}</h1>
				</div>
				<div class="col-md-4 col-xs-4">
					<h1 class="box-title">{{ $comp[$i]->nom }}</h1>
				</div>
				<div class="col-md-4 col-xs-4">
					<h1 class="box-title pull-right" style="color: red">{{ $trajets[$i]->tarif }} F CFA</h1>
				</div>
				
			</div>
			<div class="box-body">
				
			</div>
			<div class="box-footer">
				<button class="btn btn-flat btn-primary pull-right" type="submit">Réserver</button>
			</div>
		</div>
	</form>
	@endfor
@endsection 