@extends('layouts.masterAgent', ['title'=>'Reservations'])

@section('content_header')
      <h1>
        Gestion des réservations <small>Clôturer une vague</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('AgentHome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{ url('agent/reservations') }}"><i class="fa fa-save"></i>Réservations</a></li>
        <li class="active">Clôturer une vague</li>
      </ol>
@endsection

@section('content')
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-info"></i> Procédure de clôture</h4>
        Pour clôturer une vague de réservation, choisissez la date et l'heure du voyage concerné puis cliquer sur le bouton clôturer.
    </div>
	
	<div class="row">
		<div class="col-md-6 col-xs-12">
			<form>
				<div class="box">
					<div class="box-header">
						<h1 class="box-title">Clôturer une vague de réservation</h1>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label for="dateCloture" class="label-contol">Date</label>
							<input type="date" name="dateCloture" id="dateCloture" class="form-control">
						</div>
						<div class="form-group">
							<label for="heureCloture" class="label-contol">Heure</label>
							<select name="heureCloture" id="heureCloture" class="form-control">
								<option>7h</option>
								<option>12h</option>
							</select>
						</div>
					</div>
					<div class="box-footer">
						<div class="form-group pull-right">
							<button class="btn btn-default" type="reset">Annuler</button>
							<button class="btn btn-primary" type="submit">Clôturer</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection