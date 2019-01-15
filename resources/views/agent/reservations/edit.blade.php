@extends('layouts.masterAgent', ['title'=>'Reservations'])

@section('content_header')
      <h1>
        Gestion des réservations <small>Repporter une réservation</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('AgentHome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{ url('agent/reservations') }}"><i class="fa fa-save"></i>Réservations</a></li>
        <li class="active">Repporter une réservation</li>
      </ol>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-6 col-xs-12">
			<form>
				<div class="box box-primary">
					<div class="box-header">
						<h1 class="box-title">Formulaire de repport de réservation</h1>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label for="dateReserv" class="col-sm-4 label-control">Date</label>
							<div class="col-sm-8">
								<input type="text" name="dateReserv" id="dateReserv" class="form-control" value="{{ date('d/m/Y') }}" disabled="disabled">
							</div>
						</div>
						<br class="hidden-xs"><br class="hidden-xs">
						<div class="form-group">
							<label for="dateDpt" class="col-sm-4 label-control">Date de départ</label>
							<div class="col-sm-8">
								<input type="date" name="dateDpt" id="dateDpt" class="form-control">
							</div>
						</div>
						<br class="hidden-xs"><br class="hidden-xs">
						<div class="form-group">
							<label for="villeArr" class="col-sm-4 label-control">Heure de départ</label>
							<div class="col-sm-8">
								<select name="villeArr" id="villeArr" class="form-control">
									<option>-</option>
									<option>7h</option>
									<option>12h</option>
								</select>
							</div>
						</div>
						<br class="hidden-xs"><br class="hidden-xs">
						<div class="form-group">
							<label for="nomReserv" class="col-sm-4 label-control">Client</label>
							<div class="col-sm-8">
								<input type="text" name="nomReserv" id="nomReserv" class="form-control">
							</div>
						</div>
						<br class="hidden-xs"><br class="hidden-xs">
						<div class="form-group">
							<label for="villeDpt" class="col-sm-4 label-control">Départ</label>
							<div class="col-sm-8">
								<input type="text" name="villeDpt" id="villeDpt" value="Cotonou" class="form-control" disabled="diseabled">
							</div>
						</div>
						<br class="hidden-xs"><br class="hidden-xs">
						<div class="form-group">
							<label for="villeArr" class="col-sm-4 label-control">Destination</label>
							<div class="col-sm-8">
								<select name="villeArr" id="villeArr" class="form-control">
									<option>-</option>
									<option>Cotonou</option>
									<option>Parakou</option>
								</select>
							</div>
						</div>
						<br class="hidden-xs"><br class="hidden-xs">
						<div class="form-group">
							<label for="nbrPlace" class="col-sm-4 label-control">Nbre de place</label>
							<div class="col-sm-8">
								<input type="number" name="nbrPlace" id="nbrPlace" class="form-control">
							</div>
						</div>
						<br class="hidden-xs"><br class="hidden-xs">
						<div class="form-group">
							<label for="villeArr" class="col-sm-4 label-control">Embarquement</label>
							<div class="col-sm-8">
								<select name="villeArr" id="villeArr" class="form-control">
									<option>-</option>
									<option>Etoile rouge</option>
									<option>Parc iita</option>
								</select>
							</div>
						</div>
						<br class="hidden-xs">
                        <div class="form-group">
		                  <div class="col-sm-offset-4 col-sm-8">
		                    <div class="checkbox">
		                      <label>
		                        <input type="checkbox"> Payer
		                      </label>
		                    </div>
		                  </div>
		                </div>
					</div>
					<div class="box-footer">
						<div class="form-group">
							<button class="btn btn-default pull-left" type="reset">Annuler</button>
							<button class="btn btn-primary pull-right" type="submit">Enregistrer</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection