@extends('layouts.masterAdmin', ['title'=>'Pays'])

@section('content_header')
	<h1>
        Gestion des pays 
        <small>Modification</small>
    </h1>
    <ol class="breadcrumb">
   		<li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
       <li><a href="{{ route('pays.index') }}"><i class="fa fa-map"></i>Pays</a></li>
       <li>Modifier</li>
    </ol>
@stop

@section('content') 
	<div class="col-md-4 col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h1 class="box-title">Modifier un pays</h1>
      </div>
      <div class="box-body">
        <form action="{{ route('pays.update', $paysedit) }}" method="Post">
          {{ csrf_field() }}
          <!-- <input type="hidden" name="_method" value="PUT"> -->
          {{ method_field('PUT') }}
	  <div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
            <label for="code" class="label-control">Code du pays</label>
            <input type="text" class="form-control" name="code" id="code" placeholder="Entrer le code du pays" value="{{ old('code') ?? $paysedit->code }}">
            {!! $errors->first('code','<span class="help-block">:message</span>') !!}
          </div>
          <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="pays" class="label-control">Nom du pays</label>
            <input type="text" class="form-control" name="pays" id="pays" placeholder="Entrer le nom du pays" value="{{ old('pays') ?? $paysedit->pays }}">
            {!! $errors->first('pays','<span class="help-block">:message</span>') !!}
          </div>
          <div>
            <a href="{{ route('pays.index') }}" class="btn btn-flat btn-warning pull-left">Annuler</a>
            <button class="btn btn-flat btn-primary pull-right" type="submit">Modifier</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
@stop
