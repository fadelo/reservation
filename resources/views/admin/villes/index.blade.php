@extends('layouts.masterAdmin', ['title'=>'Villes'])

@section('content_header')
	<h1>
        Gestion des villes
    </h1>
    <ol class="breadcrumb">
   		<li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
       <li><a href="#"><i class="fa fa-gears"></i>Parametres</a></li>
       <li>Villes</li>
    </ol>
@stop

@section('content') 
	<div class="col-md-4 col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h1 class="box-title">Nouvelle ville</h1>
      </div>
      <div class="box-body">
        <form action="{{ route('villes.store') }}" method="Post">
          {{ csrf_field() }}
          <div class="form-group {{ $errors->has('ville') ? 'has-error' : '' }} ">
            <label for="ville" class="label-control">Nom de la ville</label>
            <input type="text" class="form-control" name="ville" id="name" placeholder="Entrer le nom de ville" value="{{ old('name') }}">
            {!! $errors->first('name','<span class="help-block">:message</span>') !!}
          </div>
          <div class="form-group {{ $errors->has('idPays' ? 'has-error' : '') }} ">
                <label for='idPays' class="label-control">Pays</label>
                <select class="form-control selectpicker" name="idPays" style="width: 100%;">
                  <option>{{ $tab[0] }}</option>
                </select>
                {!! $errors->first('idPays', '<span class="help-block">:message</span>') !!}
          </div>
          <div>
            <button class="btn btn-flat btn-warning pull-left" type="reset">Annuler</button>
            <button class="btn btn-flat btn-primary pull-right" type="submit">Enregistrer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-8 col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h1 class="box-title">Liste des villes</h1>
      </div>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Code</th>
                  <th>Nom de la ville</th>
                  <th>Pays</th>
                  <th colspan="2" align="center" style="text-align: center;">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($villes as $ville)
                      <tr>
                        <td>{{ $ville->name }}</td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Code</th>
                  <th>Nom du pays</th>
                  <th>Pays</th>
                  <th colspan="2" align="center" style="text-align: center;">Actions</th>
                </tr>
                </tfoot>
        </table>
      </div>
    </div>
  </div>
@stop