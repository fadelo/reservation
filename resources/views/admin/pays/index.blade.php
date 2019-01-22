@extends('layouts.masterAdmin', ['title'=>'Pays'])

@section('content_header')
	<h1>
        Gestion des pays
    </h1>
    <ol class="breadcrumb">
   		<li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
       <li><a href={{ route('pays.index') }}"><i class="fa fa-map"></i>Pays</a></li>
       <li>Index</li>
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
          <div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
            <label for="code" class="label-control">Code du pays</label>
            <input type="text" class="form-control" name="code" id="code" placeholder="Entrer le code du pays" value="{{ old('code')}}" autocomplete="off">
            {!! $errors->first('code','<span class="help-block">:message</span>') !!}
          </div>
          <div class="form-group {{ $errors->has('pays') ? 'has-error' : '' }}">
            <label for="pays" class="label-control">Nom du pays</label>
            <input type="text" class="form-control" name="pays" id="pays" placeholder="Entrer le nom du pays" value="{{ old('pays')}}">
            {!! $errors->first('pays','<span class="help-block">:message</span>') !!}
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
                  <th>Code du pays</th>
                  <th>Nom du pays</th>
                  <th colspan="2" style="text-align: center;" align="center">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($listpays as $pays)
                      <tr>
                        <td>{{ $pays->code }}</td>
                        <td>{{ $pays->pays }}</td>
                        <td align="center">
                           <a href="{{ route('pays.edit', $pays) }}"><i class="glyphicon glyphicon-edit"></i></a>
                        </td>
                        <td align="center">
                           <form action="{{ route('pays.destroy', $pays) }}" method="POST" onsubmit="return confirm('Lorsque vous supprimez un pays, vous supprimez toutes les villes qui lui sont reliés. Voulez-vous continuer la suppression ?')">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <Button type="submit"><i class="glyphicon glyphicon-trash"  style="color:red"></i></Button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Code du pays</th>
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
