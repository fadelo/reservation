@extends('layouts.masterAdmin', ['title'=>'Pays'])

@section('content_header')
	<h1>
        Gestion des pays
    </h1>
    <ol class="breadcrumb">
   		<li><a href="{{ route('Adminhome') }}"><i class="fa fa-home"></i>Home</a></li>
       <li><a href="#"><i class="fa fa-gears"></i>Parametres</a></li>
       <li>Pays</li>
    </ol>
@stop

@section('content') 
	<div class="col-md-4 col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h1 class="box-title">Nouveau pays</h1>
      </div>
      <div class="box-body">
        <form action="{{ route('pays.store') }}" method="Post" autocomplete="off">
          {{ csrf_field() }}
          <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name" class="label-control">Nom du pays</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Entrer le nom du pays" value="{{ old('name') }}">
            {!! $errors->first('name','<span class="help-block">:message</span>') !!}
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
        <h1 class="box-title">Liste des pays</h1>
      </div>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Code</th>
                  <th>Nom du pays</th>
                  <th colspan="2" style="text-align: center;" align="center">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($listpays as $pays)
                      <tr>
                        <td>{{ $pays->id }}</td>
                        <td>{{ $pays->name }}</td>
                        <td align="center">
                           <a href="{{ route('pays.edit', $pays) }}"><i class="glyphicon glyphicon-edit"></i></a>
                        </td>
                        <td align="center">
                          <a href="{{ route('pays.destroy', $pays) }}"><i class="glyphicon glyphicon-trash"  style="color:red"></i>
                          </a> 
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Code</th>
                  <th>Nom du pays</th>
                  <th colspan="2" style="text-align: center" align="center">Actions</th>
                </tr>
                </tfoot>
        </table>
      </div>
      <div class="box-footer">
        <div class="pull-right">
          {{ $listpays->links('vendor.pagination.simple-default') }}
        </div>
      </div>
    </div>
  </div>
@stop