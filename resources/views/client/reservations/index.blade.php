@extends('layouts.masterClient', ['title'=>'Reservations'])

@section('content_header')
      <h1>
        Mes réservations
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('ClientHome') }}"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Mes réservations</li>
      </ol>
@endsection

@section('content')

<div class="row" style="margin-top: 5px;">
    <div class="col-md-4 col-xs-12">
      <a href="{{ route('reservations.create') }}" class="btn btn-block btn-primary"> Nouvelle réservation</a>
    </div>
    <div class="col-md-4 col-xs-12" style="margin-bottom: 10px;">
      
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
			<h1 class="box-title">Toutes mes réservations</h1>
		</div>
		<div class="box-body">
			<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
          <thead>
            <tr>
              <th>N°</th>
              <th>Date</th>
              <th>Compagnie</th>
              <th>Date du voyage</th>
              <th>Statut</th>
              <th colspan="2" style="text-align: center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            	<td>30215</td>
            	<td>12/12/2018</td>
            	<td>Confort Lines</td>
            	<td>17/12/2018</td>
            	<td>En instance</td>
            	<td align="center"><i class="glyphicon glyphicon-zoom-in" title="Voir la réservation" data-toggle="modal" data-target="#reservationModal"></i></td>
            	<td align="center"><i class="glyphicon glyphicon-edit" title="Modifier/Reporter"></i></td>
            </tr>
          </tbody>
          <tfoot>
              <tr>
              <th>N°</th>
              <th>Date</th>
              <th>Compagnie</th>
              <th>Date du voyage</th>
              <th>Statut</th>
              <th colspan="2" style="text-align: center">Actions</th>
            </tr>
          </tfoot>
        </table>
      </div>
		</div>
		<div class="box-footer">
			
		</div>
	</div>

  <!-- Modal -->

 
    
  

<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="col-md-12 col-xs-9-offset-3">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Contenu de la réservation du 17/12/2018 auprès de Confort Lines</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6 col-xs-12">
                      <div class="form-group">
                      <label class="label-control" for="villeDepart">Ville de départ</label>
                      <input type="text" name="villeDepart" class="form-control" disabled="disabled">
                    </div>
                    <div class="form-group">
                      <label class="label-control" for="VilleArrive">Ville d'arrivée</label>
                      <input type="text" name="villeArrive" class="form-control" disabled="disabled">
                    </div>
                    <div class="form-group">
                      <label class="label-control" for="tarif">Tarif</label>
                      <input type="integer" class="form-control" name="tarif" disabled="disabled">
                    </div>
                    </div>
                <div class="col-md-6 col-xs-12">
                      <div class="form-group">
                      <label class="label-control" for="lieuDepart">Point d'embarquement</label>
                      <input type="text" name="lieuDepart" class="form-control" disabled="disabled">
                    </div>
                    <div class="form-group">
                      <label class="label-control" for="heureEnreg">Heure d'enrégistrement</label>
                      <input type="time" name="heureEnreg" class="form-control" disabled="disabled">
                    </div>
                    <div class="form-group">
                      <label class="label-control" for="heureDepart">Heure de départ</label>
                      <input type="time" name="heureDepart" class="form-control" disabled="disabled">
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-flat btn-warning" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
        </div>
      </div>




@endsection