@extends('layouts/default')

@section('content')    
 <div class="container">
 	<h3 class="text-center">Bienvenue sur FANAP la plateforme n°1 de réservation en ligne des tickets de bus au Bénin</h3>
 	<hr>
 	<form action="#" method="get" accept-charset="utf-8">
 		<div class="row">
 		<div class="col-md-3">
 			<div class="input-group">
		        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			    <input type="tex" class="form-control" placeholder="Départ" required="required">
		    </div>			
 		</div>
 		<div class="col-md-3">
 			<div class="input-group">
		        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			    <input type="tex" class="form-control" placeholder="Arrivée" required="required">
		    </div>			
 		</div>
 		<div class="col-md-3">
 			<div class="input-group">
		        <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
			    <input type="date" class="form-control" placeholder="Date du voyage" required="required">
		    </div>			
 		</div>
 		<div class="col-md-3">
 			<button class="btn btn-primary btn-block" type="submit">Rechercher</button>			
 		</div>			
 	</div>
 	</form>
 	  	
 </div>
@stop