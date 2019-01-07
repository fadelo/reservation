@extends('layouts/masterAgent', ['title'=>'Trajets'])

@section('content_header')
      <h1>
        Gestion des trajets <small>Cotonou - Parakou</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('AgentHome') }}"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('trajets.index') }}"><i class="fa fa-bell-o"></i>Trajets</a></li>
        <li class="active">Information complémentaires</li>
      </ol>
@endsection

@section('content')

<div class="row">
	<div class="col-md-6 col-xs-12">
		<div class="box box-primary">
			<div class="box-header">
				<h1 class="box-title">Heures de départ</h1>
			</div>
			<div class="box-body">
			<div>
				<form>
					<div class="form-group">
						<label class="label-control" for="heure">Heure départ</label>
						<input type="time" name="heureDpt" class="form-control" placeholder="ajouter une heure">
					</div>
					<div class="form-group">
						<label class="label-control" for="heure">Heure enrégistrement</label>
						<input type="time" name="heureEnreg" class="form-control" placeholder="ajouter une heure">
					</div>
					<div class="form-group">
						<button class="btn btn-flat btn-warning pull-left" type="reset">Annuler</button>
						<button class="btn btn-flat btn-primary pull-right" type="submit">Enregistrer</button>
					</div>
				</form>
			</div>

				<div class="clearfix"></div>	

				<hr>
				
				<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        		<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
					<thead>
						<tr>
							<th>Code</th>
							<th>Heure départ</th>
							<th>Heure RDV</th>
							<th colspan="2" style="text-align: center;">Actions</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
					<tfoot>
						<tr>
							<th>Code</th>
							<th>Heure départ</th>
							<th>Heure RDV</th>
							<th colspan="2" style="text-align: center;">Actions</th>
						</tr>
					</tfoot>
				</table>
			</div>

			<div class="box-footer">
				
			</div>
		</div>
	</div>
</div>
	<div class="col-md-6 col-xs-12">
		<div class="box box-primary">
			<div class="box-header">
				<h1 class="box-title">Points d'embarquement</h1>
			</div>
			<div class="box-body">
				<form>
					<div class="form-group">
						<label class="sr-only label-control" for="lieu">Lieu</label>
						<input type="text" name="lieu" class="form-control" placeholder="entrer un lieu">
					</div>
					<div class="form-group">
						<button class="btn btn-flat btn-warning pull-left">Annuler</button>
						<button class="btn btn-flat btn-primary pull-right">Enregistrer</button>
					</div>
				</form>

				<div class="clearfix"></div>	

				<hr>
			
			<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        		<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
					<thead>
						<tr>
							<th>Code</th>
							<th>Lieu</th>
							<th colspan="2" style="text-align: center;">Actions</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
					<tfoot>
						<tr>
							<th>Code</th>
							<th>Lieu</th>
							<th colspan="2" style="text-align: center;">Actions</th>
						</tr>
					</tfoot>
				</table>
			</div>


			</div>
			<div class="box-footer">
				
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-xs-12">
		<a href="{{ route('trajets.index') }}" class="btn btn-block btn-primary"><i class="glyphicon glyphicon-backward"></i> Retour vers les trajets</a>
	</div>
	
</div>

@endsection