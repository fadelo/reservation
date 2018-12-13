@extends('layouts/masterAgent', ['title'=>'Tajets'])

@section('content_header')
      <h1>
        Gestion des trajets
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('AgentHome') }}"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{ route('trajets.index') }}"><i class="fa fa-bell-o"></i>Tableau de bord</a></li>
      </ol>
@endsection

@section('content')

	<div class="row" style="margin-top: 5px;">
		<div class="col-md-4 col-xs-12">
			<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#trajetModal">
  			Ajouter un tajet
			</button>
			<!-- trajet modal -->
		<form>
			<div class="modal fade" id="trajetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Nouveau trajet</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="form-group">
			        	<label class="label-control" for="depart">Ville de départ</label>
			        	<select class="form-control">
			        		<option>Cotonou</option>
			        		<option>Parakou</option>
			        	</select>
			        </div>
			        <div class="form-group">
			        	<label class="label-control" for="depart">Ville de départ</label>
			        	<select class="form-control">
			        		<option>Cotonou</option>
			        		<option>Parakou</option>
			        	</select>
			        </div>
			        <div class="form-group">
			        	<label class="label-control" for="tarif">Tarif</label>
			        	<input type="integer" class="form-control" name="tarif">
			        </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-flat btn-warning" data-dismiss="modal">Fermer</button>
			        <button type="button" class="btn btn-flat btn-primary">Enregistrer</button>
			      </div>
			    </div>
			  </div>
			</div>
		</form>
		</div>

		<div class="col-md-4 col-xs-12" style="margin-bottom: 10px;">
			
		</div>
		<div class="col-md-4 col-xs-12">
			<div class="form-group input-group">
               <input type="text" class="form-control" placeholder="rechercher un trajet">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                </span>
          </div>	
		</div>		
	</div>

	<div class="box box-primary">
		<div class="box-header">
			<h1 class="box-title">Tous les trajets</h1>
		</div>
		<div class="box-body">
			<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
			
				<theader>
					<tr>
						<th>Code</th>
						<th>Départ</th>
						<th>Arrivé</th>
						<th>Tarif</th>
						<th colspan="3" style="text-align: center">Action</th>
					</tr>
				</theader>
				<tbody>
					<tr>
						<td>1</td>
						<td>Cotonou</td>
						<td>Parakou</td>
						<td>5000</td>
						<td align="center">
							<a href="{{ route('InfoTrajet') }}"><i class="glyphicon glyphicon-plus-sign" title="Informations suppémentaire"></i></a>
						</td>
						<td align="center">
							<a href="#"><i class="glyphicon glyphicon-edit" title="Modifier"></i></a>
						</td>
						<td align="center">
							<a href="#"><i class="glyphicon glyphicon-trash" title="Supprimer" style="color: red"></i></a>
						</td>
					</tr>
				</tbody>
				<tfooter>
					<tr>
						<th>Code</th>
						<th>Départ</th>
						<th>Arrivé</th>
						<th>Tarif</th>
						<th colspan="3" style="text-align: center">Action</th>
					</tr>
				</tfooter>
			</table>
		</div>
		</div>
		<div class="box-footer">
			
		</div>
	</div>

@endsection