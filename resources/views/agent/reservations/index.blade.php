@extends('layouts.masterAgent', ['title'=>'Reservations'])

@section('content_header')
      <h1>
        Gestion des réservations
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('AgentHome') }}"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('reservations.index') }}"><i class="fa fa-bell-o"></i>Réservations</a></li>
        <li class="active">Toutes</li>
      </ol>
@endsection

@section('content')

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
            	<td>Parakou</td>
            	<td align="center"><i class="glyphicon glyphicon-zoom-in" title="Voir la réservation"></i></td>
            	<td align="center"><i class="glyphicon glyphicon-edit" title="Modifier/Reporter"></i></td>
            </tr>
          </tbody>
          <tfoot>
              <tr>
              <th>N°</th>
              <th>Date</th>
              <th>Client</th>
              <th>Téléphone</th>
              <th>Date départ</th>
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