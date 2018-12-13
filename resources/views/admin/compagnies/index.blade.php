@extends('layouts.masterAdmin', ['title'=>'Compagnies'])

@section('content_header')
	  <h1>
        Gestion des compagnies <small>Toutes les compagnies</small>
    </h1>
    <ol class="breadcrumb">
   		<li><a href="{{ route('Adminhome') }}"><i class="fa fa-home"></i>Home</a></li>
       <li><a href="{{ route('compagnies.index') }}"><i class="fa fa-bus"></i>Compagnies</a></li>
       <li>Liste</li>
    </ol>
@stop

@section('content')
  <div class="row" style="margin-top: 5px;">
    <div class="col-md-4 col-xs-12">
        <a href="{{ route('compagnies.create') }}" class="btn btn-primary btn-block"><i class="fa fa-plus">  Ajouter une compagnie</i></a>
    </div>
    <div class="col-md-4 col-xs-12">
        
    </div>
    <div class="col-md-4 col-xs-12">
        <div class="form-group input-group">
               <input type="text" class="form-control" placeholder="zone de recherche">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                </span>
          </div>
    </div>
  </div>
   <div class="box" style="margin-top: 10px;">
     <div class="box-header">
        <h1 class="box-title">Liste des compagnies</h1>
     </div>
     <div class="box-body">

    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Téléphone</th>
              <th>Adresse</th>
              <th colspan="3" style="text-align: center">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
          <tfoot>
              <tr>
              <th>Nom</th>
              <th>Téléphone</th>
              <th>Adresse</th>
              <th colspan="3" style="text-align: center">Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
     </div>
     <div class="box-footer">
        
     </div>
   </div>
@stop