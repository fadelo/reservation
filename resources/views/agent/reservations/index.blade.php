@extends('layouts.masterAgent', ['title'=>'Reservations'])

@section('content_header')
      <h1>
        Gestion des réservations
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('AgentHome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{ url('agent/reservations') }}"><i class="fa fa-save"></i>Réservations</a></li>
        <li class="active">Toutes</li>
      </ol>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-4 col-xs-12">
      <a href="{{ url('agent/reservations/create') }}" class="btn btn-block btn-primary"><i class="glyphicon glyphicon-plus"> </i> Nouvelle réservation</a>
    </div>
    <div class="col-md-4 col-xs-12">
      
    </div>
    <div class="col-md-4 col-xs-12">
        <div class="form-group input-group">
            <input type="text" class="form-control" placeholder="rechercher une réservation">
            <span class="input-group-btn">
                  <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </div>
  </div>
	<div class="box">
		<div class="box-header">
			<h1 class="box-title">Toutes les réservations</h1>
		</div>
		<div class="box-body">
			<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
          <thead>
            <tr>
              <th>N°</th>
              <th>Date</th>
              <th>Client</th>
              <th>Téléphone</th>
              <th>Date départ</th>
              <th>Heure départ</th>
              <th>Destination</th>
              <th colspan="2" style="text-align: center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            	<td>30215</td>
            	<td>12/12/2018</td>
            	<td>Fadel Sylla</td>
            	<td>97996112</td>
            	<td>14/12/2018</td>
              <td>7h</td>
            	<td>Parakou</td>
            	<td align="center"><a href="{{ url('agent/reservations/show') }}"><i class="glyphicon glyphicon-eye-open" title="Voir pour imprimer"></i></a></td>
            	<td align="center"><a href="{{ url('agent/reservations/edit') }}"><i class="glyphicon glyphicon-share-alt" title="Modifier/Reporter"></i></a></td>
            </tr>
          </tbody>
          <tfoot>
              <tr>
              <th>N°</th>
              <th>Date</th>
              <th>Client</th>
              <th>Téléphone</th>
              <th>Date départ</th>
              <th>Heure départ</th>
              <th>Destination</th>
              <th colspan="3" style="text-align: center">Actions</th>
            </tr>
          </tfoot>
        </table>
      </div>
		</div>
		<div class="box-footer">
			
		</div>
	</div>

@endsection