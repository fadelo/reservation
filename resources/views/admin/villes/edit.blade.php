@extends('layouts.masterAdmin', ['title'=>'Villes'])

@section('content_header')
	<h1>
        Gestion des villes <small>Modification</small>
    </h1>
    <ol class="breadcrumb">
   		<li><a href="{{ route('Adminhome') }}"><i class="fa fa-dashboard"></i>Home</a></li>
       <li><a href="{{ route('villes.index') }}"><i class="fa fa-map"></i>Villes</a></li>
       <li>Modifier</li>
    </ol>
@stop

@section('content') 
	<div class="col-md-4 col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        <h1 class="box-title">Modifier une ville</h1>
      </div>
      <div class="box-body">
        <form action="{{ route('villes.update', $villeEdit) }}" method="Post">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="form-group {{ $errors->has('ville') ? 'has-error' : '' }} ">
            <label for="ville" class="label-control">Nom de la ville</label>
            <input type="text" class="form-control" name="ville" id="ville" placeholder="Entrer le nom de ville" value="{{ old('ville') ?? $villeEdit->ville}}" autocomplete="off">
            {!! $errors->first('ville','<span class="help-block">:message</span>') !!}
          </div>
          <div class="form-group {{ $errors->has('pays' ? 'has-error' : '') }} ">
                <label for='pays' class="label-control">Pays</label>
                <select class="form-control selectpicker" name="pays" value="{{ old('pays') ?? $paysEdit  }}" style="width: 100%;">
                  <option>{{ $paysEdit }}</option>
                  @foreach ($listpays as $pays)
                  <option>{{ $pays->pays }}</option>
                  @endforeach
                </select>
                {!! $errors->first('pays', '<span class="help-block">:message</span>') !!}
          </div>
          <div>
            <a href="{{ route('villes.index') }}" class="btn btn-flat btn-warning pull-left">Annuler</a>
            <button class="btn btn-flat btn-primary pull-right" type="submit">Valider</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
@stop