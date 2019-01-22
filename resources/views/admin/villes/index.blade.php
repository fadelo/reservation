@extends('layouts.masterAdmin', ['title'=>'Villes'])

@section('content_header')
	<h1>
        Gestion des villes
    </h1>
    <ol class="breadcrumb">
   		<li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
       <li><a href="{{ route('villes.index') }}"><i class="fa fa-map"></i>Ville</a></li>
       <li>Index</li>
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
            <input type="text" class="form-control" name="ville" id="ville" placeholder="Entrer le nom de ville" value="{{ old('ville') }}" autocomplete="off">
            {!! $errors->first('ville','<span class="help-block">:message</span>') !!}
          </div>
          <div class="form-group {{ $errors->has('pays' ? 'has-error' : '') }} ">
                <label for='pays' class="label-control">Pays</label>
                <select class="form-control selectpicker" name="pays" value="{{ old('pays') }}" style="width: 100%;">
                  <option></option>
                  @foreach ($listpays as $pays)
                    <option>{{ $pays->pays }}</option>
                  @endforeach
                </select>
                {!! $errors->first('pays', '<span class="help-block">:message</span>') !!}
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
                  <th>Ville</th>
                  <th>Pays</th>
                  <th colspan="2" align="center" style="text-align: center;">Actions</th>
                </tr>
                </thead>
                <tbody>
                   @for ($i = 0; $i < $nb; $i++)
                     <tr>
                       <td>{{ $villes[$i]->ville }}</td>
                       <td>{{ $tab[$i] }}</td>
                        <td align="center">
                           <a href="{{ route('villes.edit', $villes[$i]) }}" title="Modifier"><i class="glyphicon glyphicon-edit"></i></a>
                        </td>
                        <td align="center">
                          <form action="{{ route('villes.destroy', $villes[$i]) }}" method="POST" onsubmit="return confirm('Cette action supprimera tous les trajets qui concernent cette ville. Voulez-vous continuer ?')" >
                             {{ csrf_field() }}
                             {{ method_field('DELETE') }}
                            <button type="submit"><i class="glyphicon glyphicon-trash" style="color: red;"></i></button>
                          </form>
                        </td>
                     </tr>
                   @endfor
                </tbody>
                <tfoot>
                <tr>
                  <th>Ville</th>
                  <th>Pays</th>
                  <th colspan="2" align="center" style="text-align: center;">Actions</th>
                </tr>
                </tfoot>
        </table>
      </div>
    </div>
  </div>
@stop