@extends('layouts.masterClient', ['title'=>'Reservations'])

@section('content_header')
      <h1>
        Mes réservations <small>Nouvelle réservation</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('ClientHome') }}"><i class="fa fa-dashaboard"></i>Home</a></li>
        <li><a href="{{ url('client/reservations') }}"><i class="fa fa-save"></i>Réservations</a></li>
        <li class="active">Nouvelle réservation</li>
      </ol>
@endsection

@section('content')
	<div class="row">
    <div class="col-md-6 col-xs-12">
      <form>
        <div class="box box-primary">
          <div class="box-header">
            <h1 class="box-title">Formulaire de réservation</h1>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label for="comp" class="col-sm-4 label-control">Compagnie</label>
              <div class="col-sm-8">
                <select name="comp" class="form-control selectpicker">
                  <option></option>
                  <option>ATT</option>
                  <option>Confort Lines</option>
                </select>
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
              <label for="villeDpt" class="col-sm-4 label-control">Départ</label>
              <div class="col-sm-8">
                <input type="text" name="villeDpt" id="villeDpt" value="Cotonou" class="form-control" disabled="diseabled">
              </div>
            </div>
            <br class="hidden-xs"><br class="hidden-xs">
            <div class="form-group">
              <label for="villeArr" class="col-sm-4 label-control">Destination</label>
              <div class="col-sm-8">
                <select name="villeArr" id="villeArr" class="form-control selectpicker">
                  <option></option>
                  <option>Cotonou</option>
                  <option>Parakou</option>
                </select>
              </div>
            </div>
            <br class="hidden-xs"><br class="hidden-xs">
            <div class="form-group">
              <label for="villeArr" class="col-sm-4 label-control">Heure de départ</label>
              <div class="col-sm-8">
                <select name="villeArr" id="villeArr" class="form-control selectpicker">
                  <option></option>
                  <option>7h</option>
                  <option>12h</option>
                </select>
              </div>
            </div>
            
            <br class="hidden-xs"><br class="hidden-xs">
            <div class="form-group">
              <label for="villeArr" class="col-sm-4 label-control">Embarquement</label>
              <div class="col-sm-8">
                <select name="villeArr" id="villeArr" class="form-control selectpicker">
                  <option></option>
                  <option>Etoile rouge</option>
                  <option>Parc iita</option>
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
            <br class="hidden-xs">
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
	<a href="{{ route('mes_reservations.index') }}">Retour vers mes réservations</a>
@endsection