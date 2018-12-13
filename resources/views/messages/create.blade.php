@extends('layouts/default')

@section('content')
 <div class="container">
 	<h2 class="text-center">Contactez-nous</h2>
 	<hr>
 	<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
 		<p class="text-center text-muted">Si vous avez une préocupation paticulière,  <a href="mailto:fadelsylla5@gmail.com"><b>demandez de l'aide</b></a></p>
 		<br>
 		<form action="#" method="POST" accept-charset="utf-8">
 			<div class="row">
 				<div class="col-md-6 col-xs-12">
 					<div class="form-group">
		 				<label for="name" class="control-label sr-only">Nom</label>
		 				<input type="text" name="name" class="form-control" placeholder="Votre nom" required="required">
		 			</div>
		 			<div class="form-group">
		 				<label for="name" class="control-label sr-only">Email</label>
		 				<input type="email" name="name" class="form-control"placeholder="Votre addresse email" required="required">
		 			</div>		
 				</div>
 				<div class="col-md-6 col-xs-12">
 					<div class="form-group">
		 				<label for="name" class="control-label sr-only">Téléphone</label>
		 				<input type="" name="name" class="form-control" placeholder="Votre numéro de téléphone" required="required">
		 			</div>
		 			<div class="form-group">
		 				<label for="name" class="control-label sr-only">Sujet</label>
		 				<input type="text" name="name" class="form-control" placeholder="Sujet" required="required">
		 			</div>		
 				</div>		
 			</div>
 			<div class="row">
 				<div class="col-md-12 col-xs-12">
 					<div class="form-group">
		 				<label for="message" class="control-label sr-only">Message</label>
		 				<textarea class="form-control" name="message" rows="5" placeholder="Votre message" required="required"></textarea>
		 			</div>
 				</div>
 			</div>

 			<div>
 				<button type="submit" class="btn btn-primary btn-block">Envoyer le message</button>
 			</div>
 			
 		</form>
 	</div>
 	
 </div>
@stop