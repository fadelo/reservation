@extends('layouts.masterAgent', ['title'=>'Reservations'])

@section('content_header')
      <h1>
        Gestion des réservations
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('AgentHome') }}"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('reservations.index') }}"><i class="fa fa-bell-o"></i>Réservations</a></li>
        <li class="active">Fiche de contrôle</li>
      </ol>
@endsection

@section('content')

	<div class="row">
		<div class="col-md-12 col-xs-12">
			<form>
				<div class="box box-primary">
					<div class="box-header">
						<h1 class="box-title">Editer une fiche de contrôle</h1>
					</div>
					<div class="box-body">
						<div class="col-md-4 col-xs-12">
							<div class="form-group">
								<label class="label-control" for="dateVoyage">Date de voyage</label>
								<input type="date" name="dateVoyage" class="form-control">
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<div class="form-group">
								<label class="label-control" for="heureDepart">Heure de départ</label>
								<input type="time" name="heureDepart" class="form-control">
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<div class="form-group">
								<label class="label-control" for="villeDepart">Ville de départ</label>
								<select class="form-control" name="villeDepart">
									<option class="form-control">Cotonou</option>
									<option class="form-control">Parakou</option>
								</select>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<div class="form-group pull-right">
							<button class="btn btn-flat btn-warning" type="reset">Annuler</button>
							<button class="btn btn-flat btn-primary" type="submit">Editer</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="box box-primary">
				<div class="box-header">
					<h1 class="box-title">Fiche de contrôle</h1>
					<div class="pull-right">
						<a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i> Imprimer</a>
					</div>
				</div>
				<div class="box-body">
					<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
          <thead>
            <tr>
              <th>N°</th>
              <th>Client</th>
              <th>Téléphone</th>
              <th>Destination</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            	<td>30215</td>
            	<td>Fadel Sylla</td>
            	<td>97996112</td>
            	<td>Parakou</td>
            </tr>
          </tbody>
          <tfoot>
              <tr>
              <th>N°</th>            
              <th>Client</th>
              <th>Téléphone</th>
              <th>Destination</th>
            </tr>
          </tfoot>
        </table>
      </div>
				</div>
			</div>
		</div>
	</div>

@endsection